<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\notification;

/**
* @package Ultimate Points
*/

class points extends \phpbb\notification\type\base
{
	/** @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Notification Type Points Constructor
	*
	* @param \phpbb\user_loader 					$user_loader
	* @param \phpbb\db\driver\driver_interface 		$db
	* @param \phpbb\cache\driver\driver_interface 	$cache
	* @param \phpbb\user 							$user
	* @param \phpbb\auth\auth 						$auth
	* @param \phpbb\config\config 					$config
	* @param \phpbb\controller\helper 				$helper
	* @param string 								$root_path
	* @param string 								$php_ext
	* @param string 								$notification_types_table
	* @param string 								$notifications_table
	* @param string 								$user_notifications_table
	* @return \phpbb\notification\type\base
	*/
	public function __construct(\phpbb\user_loader $user_loader, \phpbb\db\driver\driver_interface $db, \phpbb\cache\driver\driver_interface $cache, $user, \phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\controller\helper $helper, $root_path, $php_ext, $notification_types_table, $notifications_table, $user_notifications_table)
	{
		$this->helper = $helper;
		parent::__construct($user_loader, $db, $cache, $user, $auth, $config, $root_path, $php_ext, $notification_types_table, $notifications_table, $user_notifications_table);
	}

	/**
	* Get notification type name
	*
	* @return string
	*/
	public function get_type()
	{
		return 'dmzx.ultimatepoints.notification.type.points';
	}

	public static $notification_option = array(
		'lang'		=> 'NOTIFICATION_POINTS_UCP',
		'group'		=> 'NOTIFICATION_GROUP_MISCELLANEOUS',
	);

	/**
	* Is this type available to the current user (defines whether or not it will be shown in the UCP Edit notification options)
	*
	* @return bool True/False whether or not this is available to the user
	*/
	public function is_available()
	{
		return true;
	}

	/**
	* Get the id of the notification
	*
	* @param array $data The data for the updated rules
	* @return int Id of the notification
	*/
	public static function get_item_id($data)
	{
		return (int) $data['points_notify_id'];
	}

	/**
	* Get the id of the parent
	*
	* @param array $data The data for the updated rules
	* @return int Id of the parent
	*/
	public static function get_item_parent_id($data)
	{
		// No parent
		return 0;
	}

	/**
	* Find the users who will receive notifications
	*
	* @param array $data The type specific data for the updated rules
	* @param array $options Options for finding users for notification
	* @return array
	*/
	public function find_users_for_notification($data, $options = array())
	{
		$users = array();
		$users[$data['receiver']] = array('');
		$this->user_loader->load_users(array_keys($users));

		return $this->check_user_notification_options(array_keys($users), $options);
	}

	/**
	* Users needed to query before this notification can be displayed
	*
	* @return array Array of user_ids
	*/
	public function users_to_query()
	{
		return array();
	}

	/**
	* Get the user's avatar
	*/
	public function get_avatar()
	{
		return $this->user_loader->get_avatar($this->get_data('sender'));
	}

	/**
	* Get the HTML formatted title of this notification
	*
	* @return string
	*/
	public function get_title()
	{
		$users = array();
		$users = array($this->get_data('sender'));
		$this->user_loader->load_users($users);
		$username = $this->user_loader->get_username($this->get_data('sender'), 'no_profile');

		return $username . '&nbsp;' . $this->get_data('points_notify_msg');
	}

	/**
	* Get the url to this item
	*
	* @return string URL
	*/
	public function get_url()
	{
		return $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => $this->get_data('mode')));
	}

	/**
	* Get email template
	*
	* @return string|bool
	*/
	public function get_email_template()
	{
		return false;
	}

	/**
	* Get email template variables
	*
	* @return array
	*/
	public function get_email_template_variables()
	{
		return array();
	}

	/**
	* Function for preparing the data for insertion in an SQL query
	* (The service handles insertion)
	*
	* @param array $data The data for the report
	* @param array $pre_create_data Data from pre_create_insert_array()
	*
	* @return array Array of data ready to be inserted into the database
	*/
	public function create_insert_array($data, $pre_create_data = array())
	{
		$this->set_data('points_notify_id', $data['points_notify_id']);
		$this->set_data('points_notify_msg', $data['points_notify_msg']);
		$this->set_data('sender', $data['sender']);
		$this->set_data('receiver', $data['receiver']);
		$this->set_data('mode', $data['mode']);

		return parent::create_insert_array($data, $pre_create_data);
	}
}
