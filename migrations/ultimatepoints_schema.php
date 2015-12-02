<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_schema extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'points_bank'	=> array(
					'COLUMNS'	=> array(
						'id'			=> array('UINT:10', null, 'auto_increment'),
						'user_id'		=> array('UINT:10', 0),
						'holding'		=> array('DECIMAL:20', 0.00),
						'totalwithdrew'	=> array('DECIMAL:20', 0.00),
						'totaldeposit'	=> array('DECIMAL:20', 0.00),
						'opentime'		=> array('UINT:10', 0),
						'fees'			=> array('CHAR:5', 'on'),
					),
					'PRIMARY_KEY'	=> 'id',
				),

				$this->table_prefix . 'points_config'	=> array(
					'COLUMNS'	=> array(
						'config_name'		=> array('VCHAR', ''),
						'config_value'		=> array('VCHAR_UNI', ''),
					),
					'PRIMARY_KEY'	=> 'config_name',
				),

				$this->table_prefix . 'points_log'	=> array(
					'COLUMNS'	=> array(
						'id'			=> array('UINT:11', null, 'auto_increment'),
						'point_send'	=> array('UINT:11', null, ''),
						'point_recv'	=> array('UINT:11', null, ''),
						'point_amount'	=> array('DECIMAL:20', 0.00),
						'point_sendold'	=> array('DECIMAL:20', 0.00),
						'point_recvold'	=> array('DECIMAL:20', 0.00),
						'point_comment'	=> array('MTEXT_UNI', ''),
						'point_type'	=> array('UINT:11', null, ''),
						'point_date'	=> array('UINT:11', null, ''),
					),
					'PRIMARY_KEY'	=> 'id',
				),

				$this->table_prefix . 'points_lottery_history'	=> array(
					'COLUMNS'	=> array(
						'id'		=> array('UINT:11', null, 'auto_increment'),
						'user_id'	=> array('UINT', 0),
						'user_name'	=> array('VCHAR', ''),
						'time'		=> array('UINT:11', 0),
						'amount'	=> array('DECIMAL:20', 0.00),
					),
					'PRIMARY_KEY'	=> 'id',
				),

				$this->table_prefix . 'points_lottery_tickets'	=> array(
					'COLUMNS'	=> array(
						'ticket_id'	=> array('UINT:11', null, 'auto_increment'),
						'user_id'	=> array('UINT:11', 0),
					),
					'PRIMARY_KEY'	=> 'ticket_id',
				),

				$this->table_prefix . 'points_values'	=> array(
					'COLUMNS'	=> array(
						'bank_cost'						=> array('DECIMAL:10', 0.00),
						'bank_fees'						=> array('DECIMAL:10', 0.00),
						'bank_interest'					=> array('DECIMAL:10', 0.00),
						'bank_interestcut'				=> array('DECIMAL:20', 0.00),
						'bank_last_restocked'			=> array('UINT:11', null),
						'bank_min_deposit'				=> array('DECIMAL:10', 0.00),
						'bank_min_withdraw'				=> array('DECIMAL:10', 0.00),
						'bank_name'						=> array('VCHAR:100', null),
						'bank_pay_period'				=> array('UINT:10', 2592000),
						'lottery_base_amount'			=> array('DECIMAL:10', 0.00),
						'lottery_chance'				=> array('DECIMAL', 50.00),
						'lottery_draw_period'			=> array('UINT:10', 3600),
						'lottery_jackpot'				=> array('DECIMAL:20', 50.00),
						'lottery_last_draw_time'		=> array('UINT:11', null),
						'lottery_max_tickets'			=> array('UINT:10', 10),
						'lottery_name'					=> array('VCHAR:100', ''),
						'lottery_prev_winner'			=> array('VCHAR', ''),
						'lottery_prev_winner_id'		=> array('UINT:10', 0),
						'lottery_ticket_cost'			=> array('DECIMAL:10', 0.00),
						'lottery_winners_total'			=> array('UINT', 0),
						'number_show_per_page'			=> array('UINT:10', 0),
						'number_show_top_points'		=> array('UINT', 0),
						'points_bonus_chance'			=> array('DECIMAL:10', 0.00),
						'points_bonus_min'				=> array('DECIMAL:10', 0.00),
						'points_bonus_max'				=> array('DECIMAL:10', 0.00),
						'points_per_attach'				=> array('DECIMAL:10', 0.00),
						'points_per_attach_file'		=> array('DECIMAL:10', 0.00),
						'points_per_poll'				=> array('DECIMAL:10', 0.00),
						'points_per_poll_option'		=> array('DECIMAL:10', 0.00),
						'points_per_post_character'		=> array('DECIMAL:10', 0.00),
						'points_per_post_word'			=> array('DECIMAL:10', 0.00),
						'points_per_topic_character'	=> array('DECIMAL:10', 0.00),
						'points_per_topic_word'			=> array('DECIMAL:10', 0.00),
						'points_per_warn'				=> array('DECIMAL:10', 0.00),
						'reg_points_bonus'				=> array('DECIMAL:10', 0.00),
						'robbery_chance'				=> array('DECIMAL:5', 0.00),
						'robbery_loose'					=> array('DECIMAL:5', 0.00),
						'robbery_max_rob'				=> array('DECIMAL:5', 10.00),
						'lottery_pm_from'				=> array('UINT:10', 0),
						'forum_topic'					=> array('DECIMAL:10', 0.00),
						'forum_post'					=> array('DECIMAL:10', 0.00),
						'forum_edit'					=> array('DECIMAL:10', 0.00),
						'forum_cost'					=> array('DECIMAL:10', 0.00),
						'forum_cost_topic' 				=> array('DECIMAL:10', 0.00),
						'forum_cost_post' 				=> array('DECIMAL:10', 0.00),
					),
				),
			),
			'add_columns'	=> array(
				$this->table_prefix . 'users' => array(
					'user_points' 			=> array('DECIMAL:20', 0.00),
				),

				$this->table_prefix . 'posts' => array(
					'points_received'				=> array('DECIMAL:20', 0.00),
					'points_poll_received'			=> array('DECIMAL:20', 0.00),
					'points_attachment_received'	=> array('DECIMAL:20', 0.00),
					'points_topic_received'			=> array('DECIMAL:20', 0.00),
					'points_post_received'			=> array('DECIMAL:20', 0.00),
				),

				$this->table_prefix . 'forums' => array(
					'forum_perpost' 		=> array('DECIMAL:10', 5.00),
					'forum_peredit' 		=> array('DECIMAL:10', 0.05),
					'forum_pertopic' 		=> array('DECIMAL:10', 15.00),
					'forum_cost'			=> array('DECIMAL:10', 0.00),
					'forum_cost_topic'		=> array('DECIMAL:10', 0.00),
					'forum_cost_post'		=> array('DECIMAL:10', 0.00),
				),
			),
		);
	}

	public function revert_schema()
	{
		return 	array(
			'drop_tables' => array(
				$this->table_prefix . 'points_bank',
				$this->table_prefix . 'points_config',
				$this->table_prefix . 'points_log',
				$this->table_prefix . 'points_lottery_history',
				$this->table_prefix . 'points_lottery_tickets',
				$this->table_prefix . 'points_values',
			),
			'drop_columns' => array(
				$this->table_prefix . 'users'	=> array(
					'user_points',
				),

				$this->table_prefix . 'posts'	=> array(
					'points_received',
					'points_poll_received',
					'points_attachment_received',
					'points_topic_received',
					'points_post_received',
				),

				$this->table_prefix . 'forums'	=> array(
					'forum_perpost',
					'forum_peredit',
					'forum_pertopic',
					'forum_cost',
					'forum_cost_topic',
					'forum_cost_post',
				),
			),
		);
	}
}
