<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\core;

/**
* @package Ultimate Points
*/

//$ultimate_points = new functions_points();

class functions_points
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\cache\service */
	protected $cache;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\pagination */
	protected $pagination;

	/** @var string */
	protected $phpEx;

	/** @var string phpBB root path */
	protected $phpbb_root_path;

	/**
	* The database tables
	*
	* @var string
	*/
	protected $points_bank_table;

	protected $points_config_table;

	protected $points_lottery_history_table;

	protected $points_lottery_tickets_table;

	protected $points_values_table;

	/**
	* Constructor
	*
	* @param \phpbb\template\template		 	$template
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\controller\helper		 	$helper
	* @param \phpbb\cache\service		 		$cache
	* @param \phpbb\request\request		 		$request
	* @param \phpbb\config\config				$config
	* @param \phpbb\pagination					$pagination
	* @param									$phpEx
	* @param									$phpbb_root_path
	* @param string 							$points_bank_table
	* @param string 							$points_config_table
	* @param string 							$points_lottery_history_table
	* @param string 							$points_lottery_tickets_table
	* @param string 							$points_values_table
	*
	*/

	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\controller\helper $helper,
		\phpbb\cache\service $cache, \phpbb\request\request $request, \phpbb\config\config $config, \phpbb\pagination $pagination, $phpEx, $phpbb_root_path, $points_bank_table, $points_config_table, $points_lottery_history_table, $points_lottery_tickets_table, $points_values_table)
	{
		$this->template 			= $template;
		$this->user 				= $user;
		$this->db 					= $db;
		$this->helper 				= $helper;
		$this->cache 				= $cache;
		$this->request 				= $request;
		$this->config 				= $config;
		$this->pagination 			= $pagination;
		$this->phpEx 				= $phpEx;
		$this->phpbb_root_path 		= $phpbb_root_path;
		$this->points_bank_table 	= $points_bank_table;
		$this->points_config_table 	= $points_config_table;
		$this->points_lottery_history_table 	= $points_lottery_history_table;
		$this->points_lottery_tickets_table 	= $points_lottery_tickets_table;
		$this->points_values_table 				= $points_values_table;
	}

	/**
	* Strip text
	*/
	function strip_text($text)
	{
		//remove quotes
		$new_text = '';
		$text = explode('[quote', $text);
		$new_text .= $text[0]; //1st frame is always valid text
		for($i = 1, $size = sizeof($text); $i < $size; $i++)
		{
			if(stristr($text[$i], '[/quote') === false) //checkout if it's a double/triple and so on quote
			{
				continue;
			}

			$item = explode('[/quote' , $text[$i]);
			$last_frame = sizeof($item) - 1; //only last frame is valid text
			$new_text .= trim(substr($item[$last_frame], 10)); //remove bbcode uid
		}

		//remove code
		$text = $new_text;
		$new_text = '';
		$text = explode('[code', $text);
		$new_text .= $text[0]; //1st frame is always valid text
		for($i = 1, $size = sizeof($text); $i < $size; $i++)
		{
			if(stristr($text[$i], '[/code') === false) //checkout if it's a double/triple and so on code
			{
				continue;
			}

			$item = explode('[/code' , $text[$i]);
			$last_frame = sizeof($item) - 1; //only last frame is valid text
			$new_text .= trim(substr($item[$last_frame], 10)); //remove bbcode uid
		}

		//remove urls
		$text = $new_text;
		$new_text = '';
		$text = explode('[url', $text);
		$new_text .= $text[0]; //1st frame is always valid text
		for($i = 1, $size = sizeof($text); $i < $size; $i++)
		{
			if(stristr($text[$i], '[/url') === false) //checkout if it's a double/triple and so on url
			{
				continue;
			}
			$item = explode('[/url' , $text[$i]);
			$last_frame = sizeof($item) - 1; //only last frame is valid text
			$new_text .= trim(substr($item[$last_frame], 10)); //remove bbcode uid
		}

		//now remove the rest of bbcode
		$text = $new_text;
		$new_text = '';
		$text = explode('[', $text);
		$new_text .= $text[0]; //1st frame is always valid text
		for($i = 1, $size = sizeof($text); $i < $size; $i++)
		{
			$item = explode(']' , $text[$i]);
			if(sizeof($item) > 1) // if any part of text remains :-D
			{
				$new_text .= $item[1];
			}
		}
		$new_text = strip_tags($new_text); //remove smilies and images

		//BEGIN to remove extra spaces
		$new_text = explode(' ', $new_text);
		for($i = 0, $size = sizeof($new_text); $i < $size; $i++)
		{
			if(trim($new_text[$i]) == '' || trim($new_text[$i]) == '&nbsp;')
			{
				unset($new_text[$i]);
			}
			else
			{
				$new_text[$i] = trim($new_text[$i]);
			}
		}
		//END to remove extra spaces
		return trim(join(' ', $new_text));
	}

	/**
	* Add points to user
	*/
	function add_points($user_id, $amount)
	{
		// Select users current points
		$sql_array = array(
			'SELECT'	=> 'user_points',
			'FROM'		=> array(
				USERS_TABLE => 'u',
			),
			'WHERE'		=> 'user_id = ' . (int) $user_id,
		);
		$sql = $this->db->sql_build_query('SELECT', $sql_array);
		$result = $this->db->sql_query($sql);
		$user_points = $this->db->sql_fetchfield('user_points');
		$this->db->sql_freeresult($result);

		// Add the points
		$data = array(
			'user_points'	=> $user_points + $amount
		);

		$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $this->db->sql_build_array('UPDATE', $data) . '
				WHERE user_id = ' . (int) $user_id;
		$this->db->sql_query($sql);

		return;
	}

	/**
	* Substract points from user
	*/
	function substract_points($user_id, $amount)
	{
		// Select users current points
		$sql_array = array(
			'SELECT'	=> 'user_points',
			'FROM'		=> array(
				USERS_TABLE => 'u',
			),
			'WHERE'		=> 'user_id = ' . (int) $user_id,
		);
		$sql = $this->db->sql_build_query('SELECT', $sql_array);
		$result = $this->db->sql_query($sql);
		$user_points = $this->db->sql_fetchfield('user_points');
		$this->db->sql_freeresult($result);

		// Update the points
		$data = array(
			'user_points'	=> $user_points - $amount
		);

		$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $this->db->sql_build_array('UPDATE', $data) . '
				WHERE user_id = ' . (int) $user_id;
		$this->db->sql_query($sql);

		return;
	}

	/**
	* Set the amount of points to user
	*/
	function set_points($user_id, $amount)
	{
		// Set users new points
		$data = array(
			'user_points'	=> $amount
		);

		$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $this->db->sql_build_array('UPDATE', $data) . '
				WHERE user_id = ' . (int) $user_id;
		$this->db->sql_query($sql);

		return;
	}

	/**
	* Set the amount of bank points to user
	*/
	function set_bank($user_id, $amount)
	{
		// Set users new holding
		$data = array(
			'holding'	=> $amount
		);

		$sql = 'UPDATE ' . $this->points_bank_table . '
				SET ' . $this->db->sql_build_array('UPDATE', $data) . '
				WHERE user_id = ' . (int) $user_id;
		$this->db->sql_query($sql);

		return;
	}

	/**
	* Preformat numbers
	*/
	function number_format_points($num)
	{
		$decimals = 2;

		return number_format($num, $decimals, $this->user->lang['POINTS_SEPARATOR_DECIMAL'], $this->user->lang['POINTS_SEPARATOR_THOUSANDS']);
	}

	/**
	* Run Lottery
	*/
	function run_lottery()
	{
		$current_time = time();

		/**
		* Read out config values
		*/
		$sql = 'SELECT *
				FROM ' . $this->points_values_table;
		$result = $this->db->sql_query($sql);
		$points_values = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		// Count number of tickets
		$sql_array = array(
			'SELECT'	=> 'COUNT(ticket_id) AS num_tickets',
			'FROM'		=> array(
				$this->points_lottery_tickets_table => 'l',
			),
		);
		$sql = $this->db->sql_build_query('SELECT', $sql_array);
		$result = $this->db->sql_query($sql);
		$total_tickets = (int) $this->db->sql_fetchfield('num_tickets');
		$this->db->sql_freeresult($result);

		// Select a random user from tickets table
		$sql_layer = $this->db->get_sql_layer();
		switch ($sql_layer)
		{
			case 'postgres':
				$order_by = 'RANDOM()';
			break;

			case 'mssql':
			case 'mssql_odbc':
				$order_by = 'NEWID()';
			break;

			default:
				$order_by = 'RAND()';
			break;
		}

		$sql_array = array(
			'SELECT'	=> '*',
			'FROM'		=> array(
				$this->points_lottery_tickets_table => 'l',
			),
			'ORDER_BY'	=> $order_by,
		);
		$sql = $this->db->sql_build_query('SELECT', $sql_array);
		$result = $this->db->sql_query_limit($sql, 1);
		$random_user_by_tickets = (int) $this->db->sql_fetchfield('user_id');
		$this->db->sql_freeresult($result);

		if ($total_tickets > 0)
		{
			// Genarate a random number
			$rand_base 	= $points_values['lottery_chance'];
			$rand_value = rand(0, 100);

			// Decide, if the user really wins
			if ($rand_value <= $rand_base)
			{
				$winning_number = $random_user_by_tickets;

				// Select a winner from ticket table
				$sql_array = array(
					'SELECT'	=> '*',
					'FROM'		=> array(
						USERS_TABLE => 'u',
					),
					'WHERE'		=> 'user_id = ' . $winning_number,
				);
				$sql = $this->db->sql_build_query('SELECT', $sql_array);
				$result = $this->db->sql_query($sql);
				$winner = $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);

				// Check if lottery is enabled and prepare winner informations
				$sql = 'SELECT lottery_enable
						FROM ' . $this->points_config_table;
				$result = $this->db->sql_query($result);
				$lottery_enabled = $this->db->sql_fetchfield('lottery_enable');
				$this->db->sql_freeresult($result);

				if ($lottery_enabled != 0)
				{
					// Select the receiver language
					$winner['user_lang'] = (file_exists($this->phpbb_root_path . 'ext/dmzx/ultimatepoints/language/' . $winner['user_lang'] . "/common.{$this->phpEx}")) ? $winner['user_lang'] : $this->config['default_lang'];

					// load receivers language
					include($this->phpbb_root_path . 'ext/dmzx/ultimatepoints/language/' . basename($winner['user_lang']) . "/common.{$this->phpEx}");

					$winnings_update = $winner['user_points'] + $this->points_values('lottery_jackpot');
					$this->set_points($winner['user_id'], $winnings_update);

					$winner_notification = $this->number_format_points($points_values['lottery_jackpot']) . ' ' . $this->config['points_name'] . ' ';
					$winner_deposit = $this->user->lang['LOTTERY_PM_CASH_ENABLED'];
					$amount_won = $points_values['lottery_jackpot'];
				}
				else
				{
					$winner_notification = '';
					$winner_deposit = '';
					$amount_won = '';
				}

				// Update previous winner information
				$this->set_points_values('lottery_prev_winner', ("'" . $winner['username'] . "'"));
				$this->set_points_values('lottery_prev_winner_id', $winner['user_id']);

				// Check, if user wants to be informed by PM
				if ($winner['user_allow_pm'] == 1)
				{
					$sql_array = array(
						'SELECT'	=> '*',
						'FROM'		=> array(
							USERS_TABLE => 'u',
						),
						'WHERE'		=> 'user_id = ' . $points_values['lottery_pm_from'],
					);
					$sql = $this->db->sql_build_query('SELECT', $sql_array);
					$result = $this->db->sql_query($sql);
					$pm_sender = $this->db->sql_fetchrow($result);
					$this->db->sql_freeresult($result);

					// Notify the lucky winner by PM
					$pm_subject	= utf8_normalize_nfc($this->user->lang['LOTTERY_PM_SUBJECT']);
					$pm_text	= utf8_normalize_nfc(sprintf($this->user->lang['LOTTERY_PM_BODY'], $winner_notification, $winner_deposit));

					$poll = $uid = $bitfield = $options = '';
					generate_text_for_storage($pm_subject, $uid, $bitfield, $options, false, false, false);
					generate_text_for_storage($pm_text, $uid, $bitfield, $options, true, true, true);

					$pm_data = array(
						'address_list'		=> array ('u' => array($winner['user_id'] => 'to')),
						'from_user_id'		=> ($points_values['lottery_pm_from'] == 0) ? $winner['user_id'] : $pm_sender['user_id'],
						'from_username'		=> ($points_values['lottery_pm_from'] == 0) ? $this->user->lang['LOTTERY_PM_COMMISION'] : $pm_sender['username'],
						'icon_id'			=> 0,
						'from_user_ip'		=> '',

						'enable_bbcode'		=> true,
						'enable_smilies'	=> true,
						'enable_urls'		=> true,
						'enable_sig'		=> true,

						'message'			=> $pm_text,
						'bbcode_bitfield'	=> $bitfield,
						'bbcode_uid'		=> $uid,
					);

					submit_pm('post', $pm_subject, $pm_data, false);
				}

				// Add new winner to lottery history
				$sql = 'INSERT INTO ' . $this->points_lottery_history_table . ' ' . $this->db->sql_build_array('INSERT', array(
					'user_id'			=> (int) $winner['user_id'] ,
					'user_name'			=> $winner['username'] ,
					'time'				=> $current_time,
					'amount'			=> $points_values['lottery_jackpot'],
				));
				$this->db->sql_query($sql);

				// Update winners total
				$this->set_points_values('lottery_winners_total', $points_values['lottery_winners_total'] + 1);

				// Add jackpot to winner
				$this->add_points((int) $winner['user_id'], $points_values['lottery_jackpot']);

				// Reset jackpot
				$this->set_points_values('lottery_jackpot', $points_values['lottery_base_amount']);
			}
			else
			{
				$this->set_points_values('lottery_jackpot', $points_values['lottery_jackpot'] + $points_values['lottery_base_amount']);

				$no_winner = 0;

				$sql = 'INSERT INTO ' . $this->points_lottery_history_table . ' ' . $this->db->sql_build_array('INSERT', array(
					'user_id'			=> 0,
					'user_name'			=> $no_winner,
					'time'				=> $current_time,
					'amount'			=> 0,
				));
				$this->db->sql_query($sql);

				// Update previous winner information
				$this->set_points_values('lottery_prev_winner', "'" . $no_winner . "'");
				$this->set_points_values('lottery_prev_winner_id', 0);
			}
		}

		// Reset lottery

		// Delete all tickets
		$sql = 'DELETE FROM ' . $this->points_lottery_tickets_table;
		$this->db->sql_query($sql);

		// Reset last draw time
		$check_time = $points_values['lottery_last_draw_time'] + $points_values['lottery_draw_period'];
		$current_time = time();
		if ($current_time > $check_time)
		{
			while ($check_time < $current_time)
			{
				$check_time = $check_time + $points_values['lottery_draw_period'];
				$check_time++;
			}

			if ($check_time > $current_time)
			{
				$check_time = $check_time - $points_values['lottery_draw_period'];
				$this->set_points_values('lottery_last_draw_time', $check_time);
			}
		}
		else
		{
			$this->set_points_values('lottery_last_draw_time', ($points_values['lottery_last_draw_time'] + $points_values['lottery_draw_period']));
		}
	}

	/**
	* Set points config value. Creates missing config entry.
	*/
	function set_points_config($config_name, $config_value, $is_dynamic = false)
	{
		$sql = 'UPDATE ' . $this->points_config_table . "
				SET config_value = '" . $this->db->sql_escape($config_value) . "'
				WHERE config_name = '" . $this->db->sql_escape($config_name) . "'";
		$this->db->sql_query($sql);

		if (!$this->db->sql_affectedrows() && !isset($points_config[$config_name]))
		{
			$sql = 'INSERT INTO ' . $this->points_config_table . ' ' . $this->db->sql_build_array('INSERT', array(
				'config_name'	=> $config_name,
				'config_value'	=> $config_value,
				'is_dynamic'	=> ($is_dynamic) ? 1 : 0));
			$this->db->sql_query($sql);
		}

		$points_config[$config_name] = $config_value;

		if (!$is_dynamic)
		{
			$this->cache->destroy('config');
		}
	}

	/**
	* Set points values
	*/
	function set_points_values($field, $value)
	{
		$sql = "UPDATE " . $this->points_values_table . "
				SET $field = $value";
		$this->db->sql_query($sql);

		return;
	}

	function points_values($config_name)
	{
		/**
		* Read out config values
		*/
		$sql = 'SELECT ' . $config_name . '
				FROM ' . $this->points_values_table;
		$result = $this->db->sql_query($sql);
		$config_value = $this->db->sql_fetchfield($config_name);
		$this->db->sql_freeresult($result);

		return $config_value;
	}

	function add_points_to_table($post_id, $points, $mode, $attachments, $poll)
	{
		$sql_ary = array(
			'points_' . $mode . '_received'	=> $points,
			'points_attachment_received'	=> $attachments,
			'points_poll_received'			=> $poll,
			'points_received'				=> $points
		);

		$sql = 'UPDATE ' . POSTS_TABLE . '
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE post_id = ' . (int) $post_id;
		$this->db->sql_query($sql);
	}
}
