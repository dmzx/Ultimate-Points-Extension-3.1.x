<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_sample_value extends \phpbb\db\migration\migration
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
				'config_name' 	=> 'transfer_enable',
					'config_value'	=> '1',
				),
			array(
				'config_name' 	=> 'transfer_pm_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'comments_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'logs_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'images_topic_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'images_memberlist_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'lottery_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'bank_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'robbery_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'points_disablemsg',
				'config_value'	=> 'Ultimate Points is currently disabled!',
			),
			array(
				'config_name' 	=> 'stats_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'lottery_multi_ticket_enable',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'robbery_notify',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'display_lottery_stats',
				'config_value'	=> '1',
			),
			array(
				'config_name' 	=> 'uplist_enable',
				'config_value'	=> '1',
			),
		);

		// Insert sample data
		$this->db->sql_multi_insert($this->table_prefix . 'points_config', $sample_data);
	}
}
