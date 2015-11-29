<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_POINTS')),
			array('module.add', array(
			'acp', 'ACP_POINTS', array(
					'module_basename'	=> '\dmzx\ultimatepoints\acp\ultimatepoints_module', 'modes' => array('points', 'bank', 'lottery', 'robbery', 'forumpoints', 'userguide'),
				),
			)),
		);
	}
}
