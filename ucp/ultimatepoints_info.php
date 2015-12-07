<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\ucp;

class ultimatepoints_info
{
	function module()
	{
		return array(
			'filename'		=> 'dmzx\ultimatepoints\ucp\ultimatepoints_module',
			'title'			=> 'UCP_ULTIMATEPOINTS_TITLE',
			'modes'			=> array(
				'lottery'	=> array(
					'title'	=> 'LOTTERY_TITLE_MAIN',
					'auth'	=> 'ext_dmzx/ultimatepoints',
					'cat'	=> array('UCP_MAIN')
				),
				'bank'	=> array(
					'title'	=> 'BANK_TITLE_MAIN',
					'auth'	=> 'ext_dmzx/ultimatepoints',
					'cat'	=> array('UCP_MAIN')
				),
				'robbery'	=> array(
					'title'	=> 'POINTS_ROBBERY',
					'auth'	=> 'ext_dmzx/ultimatepoints',
					'cat'	=> array('UCP_MAIN')
				),
			),
		);
	}
}
