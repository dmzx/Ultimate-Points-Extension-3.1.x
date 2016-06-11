<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_data extends \phpbb\db\migration\migration
{
	var $ext_version = '1.1.3';

	public function update_data()
	{
		return array(
			// Add config
			array('config.add', array('ultimate_points_version', $this->ext_version)),
			array('config.add', array('points_notification_id', 0)),
			// Add permission
			array('permission.add', array('u_use_points', true)),
			array('permission.add', array('u_use_bank', true)),
			array('permission.add', array('u_use_logs', true)),
			array('permission.add', array('u_use_robbery', true)),
			array('permission.add', array('u_use_lottery', true)),
			array('permission.add', array('u_use_transfer', true)),
			array('permission.add', array('f_pay_attachment', false)),
			array('permission.add', array('f_pay_topic', false)),
			array('permission.add', array('f_pay_post', false)),
			array('permission.add', array('m_chg_points', true)),
			array('permission.add', array('m_chg_bank', true)),
			array('permission.add', array('a_points', true)),
			// Set permission
			array('permission.permission_set', array('REGISTERED', 'u_use_points', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_use_bank', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_use_logs', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_use_robbery', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_use_lottery', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_use_transfer', 'group')),
		);
	}
}
