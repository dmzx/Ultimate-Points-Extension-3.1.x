<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_sample extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\ultimatepoints\migrations\ultimatepoints_schema',
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'insert_sample_data'))),
		);
	}

	public function insert_sample_data()
	{
		global $user;

		// Define sample rule data
		$sample_data = array(
			array(
					'number_show_per_page' => '15',
					'number_show_top_points' => '10',
					'reg_points_bonus' => '50',
					'lottery_jackpot' => '50',
					'lottery_winners_total' => '0',
					'lottery_prev_winner' => '0',
					'lottery_prev_winner_id' => '0',
					'lottery_last_draw_time' => '0',
					'bank_last_restocked' => '0',
					'lottery_base_amount' => '50.00',
					'lottery_draw_period' => '3600',
					'lottery_ticket_cost' => '10',
					'bank_fees' => '0',
					'bank_interest' => '0',
					'bank_pay_period' => '2592000',
					'bank_min_withdraw' => '0',
					'bank_min_deposit' => '0',
					'bank_interestcut' => '0',
					'points_per_poll_option' => '0',
					'points_per_poll' => '0',
					'points_per_attach_file' => '0',
					'points_per_attach' => '0',
					'points_per_post_word' => '0',
					'points_per_post_character' => '0',
					'points_per_topic_word' => '0',
					'points_per_topic_character' => '0',
					'points_per_warn' => '0',
					'robbery_chance' => '50',
					'robbery_loose' => '50',
					'bank_cost' => '0',
					'bank_name' => 'BANK NAME',
					'lottery_name' => 'LOTTERY NAME',
				),
		);

		// Insert sample PM data
		$this->db->sql_multi_insert($this->table_prefix . 'points_values', $sample_data);
	}
}
