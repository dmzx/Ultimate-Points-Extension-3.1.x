<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_module_upc extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('ucp', false, 'UCP_ULTIMATEPOINTS_TITLE')),
			array('module.add', array(
				'ucp', 'UCP_ULTIMATEPOINTS_TITLE', array(
					'module_basename'	=> '\dmzx\ultimatepoints\ucp\ultimatepoints_module',
					'auth'				=> 'ext_dmzx/ultimatepoints',
					'modes'				=> array('lottery', 'bank', 'robbery'),
				),
			)),
		);
	}
}
