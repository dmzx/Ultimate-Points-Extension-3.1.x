<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Ultimate Points',
	'ACP_POINTS_BANK_EXPLAIN'			=> 'Here you can alter the settings for the Bank module',
	'ACP_POINTS_BANK_TITLE'				=> 'Bank Settings',
	'ACP_POINTS_DEACTIVATED'			=> 'Ultimate Points is currently disabled!',
	'ACP_POINTS_FORUM_EXPLAIN'			=> 'Here you can set the default forum points for all forums at once. So ideal for your first settings.<br />Please keep in mind, that these settings are for <strong>ALL</strong> forums. So if you manually changed any of your forum points settings with individual values, you need to redone this after using this option!',
	'ACP_POINTS_FORUM_TITLE'			=> 'Forum Points Settings',
	'ACP_POINTS_INDEX_EXPLAIN'			=> 'Here you can alter the General settings of Ultimate Points',
	'ACP_POINTS_INDEX_TITLE'			=> 'Point Settings',
	'ACP_POINTS_LOTTERY_EXPLAIN'		=> 'Here you can alter the settings of the Lottery module',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Lottery Settings',
	'ACP_POINTS_ROBBERY_EXPLAIN'		=> 'Here you can alter the settings of the Robbery module',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Robbery Settings',
	'ACP_POINTS_VALUES_HINT'			=> '<strong>Hint: </strong>Always enter values without the thousands separator<br />and decimals with a point, i.e. 1000.50',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'User Guide',
	'ACP_POINTS_USERGUIDE_EXPLAIN'		=> 'Here you get help on how to use the Ultimate Points.<br />So if you have questions, please always look here first, before you ask questions on the support sites!',
	'ACP_USER_POINTS_TITLE'				=> 'Ultimate Points Settings',

	'BANK_COST'							=> 'The cost for maintaining a bank account',
	'BANK_COST_EXPLAIN'					=> 'Here you set the price, that users have to pay every period for their bank account (set 0 to disable this feature)',
	'BANK_ENABLE'						=> 'Enable bank module',
	'BANK_ENABLE_EXPLAIN'				=> 'This will allow users to use the bank module',
	'BANK_FEES'							=> 'Withdraw fees',
	'BANK_FEES_ERROR'					=> 'The withdraw fees cannot be higher than 100% !!',
	'BANK_FEES_EXPLAIN'					=> 'The amount in percent (%) that users will have to pay, when they withdraw from the bank',
	'BANK_INTEREST'						=> 'Interest rate',
	'BANK_INTERESTCUT'					=> 'Disable interest at',
	'BANK_INTERESTCUTP'					=> '(set 0 to disable this feature)',
	'BANK_INTERESTCUT_EXPLAIN'			=> 'This is the maximum amount for which a user will get the interest rate. If they own more, the set value is the maximum! Set 0 to deactivate this feature.',
	'BANK_INTEREST_ERROR'				=> 'The interest rate cannot be higher than 100% !!',
	'BANK_INTEREST_EXPLAIN'				=> 'The amount in % of interest',
	'BANK_MINDEPOSIT'					=> 'Min. deposit',
	'BANK_MINDEPOSIT_EXPLAIN'			=> 'The minimum amount that users can deposit in the bank',
	'BANK_MINWITHDRAW'					=> 'Min. withdraw',
	'BANK_MINWITHDRAW_EXPLAIN'			=> 'The minimum amount that users can withdraw from the bank',
	'BANK_NAME'							=> 'Name of your bank',
	'BANK_NAME_EXPLAIN'					=> 'Enter a name for your bank, i.e. Our Forum Bank',
	'BANK_OPTIONS'						=> 'Bank Settings',
	'BANK_PAY'							=> 'Interest payment time',
	'BANK_PAY_EXPLAIN'					=> 'The time period between bank payments',
	'BANK_TIME'							=> 'days',
	'BANK_VIEW'							=> 'Enable points bank',
	'BANK_VIEW_EXPLAIN'					=> 'This will enable the bank module',

	'FORUM_OPTIONS'						=> 'Forum Points',
	'FORUM_PEREDIT'						=> 'Points Per Edit',
	'FORUM_PEREDIT_EXPLAIN'				=> 'Enter here, how much points users will receive for <strong>editing</strong> a post. Please be aware, that they will also receive additional points, which you defined in the advanced points settings.<br />Set to 0 to disable receiving points for this forum.',
	'FORUM_PERPOST'						=> 'Points Per Post',
	'FORUM_PERPOST_EXPLAIN'				=> 'Enter here, how much points users will receive for placing <strong>posts (replies)</strong>. Please be aware, that they will also receive additional points, which you defined in the advanced points settings.<br />Set to 0 to disable receiving points for this forum. This way also the advanced points settings are disabled for this forum!',
	'FORUM_PERTOPIC'					=> 'Points Per Topic',
	'FORUM_PERTOPIC_EXPLAIN'			=> 'Enter here, how much points users will receive for placing a <strong>new topic</strong>. Please be aware, that they will also receive additional points, which you defined in the advanced points settings.<br />Set to 0 to disable receiving points for this forum. This way also the advanced points settings are disabled for this forum!',
	'FORUM_COST'						=> 'Points Per Attachment Download',
	'FORUM_COST_EXPLAIN'				=> 'Enter here, how much points users will have to pay for <strong>downloading an attachment</strong>.<br />Set to 0 to disable this feature.',
	'FORUM_COST_TOPIC'					=> 'Points to pay for new topic',
	'FORUM_COST_TOPIC_EXPLAIN'			=> 'Enter here, how much points a user has to pay to start a new topic in this forum',
	'FORUM_COST_POST'					=> 'Points to pay for new post',
	'FORUM_COST_POST_EXPLAIN'			=> 'Enter here, how much points a user has to pay to make a new post in thsi forum',
	'FORUM_POINT_SETTINGS'				=> 'Ultimate Points Settings',
	'FORUM_POINT_SETTINGS_EXPLAIN'		=> 'Here you can setup, how much points users will gain for placing new topics, new posts (replies) and editing their posts. These settings are on a per forum basis. This way you can make it very detailed, where users will get points and where not.',
	'FORUM_POINT_SETTINGS_UPDATED'		=> 'Global forum points updated',
	'FORUM_POINT_UPDATE'				=> 'Update global forum points',
	'FORUM_POINT_UPDATE_CONFIRM'		=> '<br />Are you sure you want to update all forum points with the given values?<br />This step will overwrite all current settings and cannot made reversable!',

	'LOG_GROUP_TRANSFER_ADD'			=> 'Transferred Points to a group',
	'LOG_GROUP_TRANSFER_SET'			=> 'Set Points to a new value for a group',
	'LOG_MOD_BANK'						=> '<strong>Edited bank points</strong><br />» %1$s',
	'LOG_MOD_POINTS'					=> '<strong>Edited points</strong><br />» %1$s',
	'LOG_MOD_POINTS_BANK'				=> '<strong>Edited bank settings</strong>',
	'LOG_MOD_POINTS_BANK_PAYS'			=> '<strong>Bank interest payments</strong><br />» %1$s',
	'LOG_MOD_POINTS_FORUM'				=> '<strong>Edited Global Forum Points settings</strong>',
	'LOG_MOD_POINTS_FORUM_SWITCH'		=> '<strong>Edited Forum Point Switches</strong>',
	'LOG_MOD_POINTS_FORUM_VALUES'		=> '<strong>Edited Forum Point Values</strong>',
	'LOG_MOD_POINTS_LOTTERY'			=> '<strong>Edited Lottery settings</strong>',
	'LOG_MOD_POINTS_RANDOM'				=> '<strong>Random points won by</strong><br />» %1$s',
	'LOG_MOD_POINTS_ROBBERY'			=> '<strong>Edited Robbery settings</strong>',
	'LOG_MOD_POINTS_SETTINGS'			=> '<strong>Edited Points settings</strong>',
	'LOG_RESYNC_LOTTERY_HISTORY'		=> '<strong>The lottery history was reset successfully</strong>',
	'LOG_RESYNC_POINTSCOUNTS'			=> '<strong>All users points were reset successfully</strong>',
	'LOG_RESYNC_POINTSLOGSCOUNTS'		=> '<strong>All user logs were reset successfully</strong>',
	'LOTTERY_BASE_AMOUNT'				=> 'Base jackpot',
	'LOTTERY_BASE_AMOUNT_EXPLAIN'		=> 'The Jackpot will begin initially with this amount. If raised during a draw period, additional sums will be added to the next draw. The Jackpot will not decrease if lowered.',
	'LOTTERY_CHANCE'					=> 'Chance to win the Jackpot',
	'LOTTERY_CHANCE_ERROR'				=> 'The chance to win cannot be higher than 100% !!',
	'LOTTERY_CHANCE_EXPLAIN'			=> 'Here you can set the percentage to win the Jackpot (the higher the value, the bigger the chance to win)',
	'LOTTERY_DISPLAY_STATS'				=> 'Display next draw time on index page',
	'LOTTERY_DISPLAY_STATS_EXPLAIN'		=> 'This will display the next lottery draw time on the index page.',
	'LOTTERY_DRAW_PERIOD'				=> 'Draw period',
	'LOTTERY_DRAW_PERIOD_EXPLAIN'		=> 'Amount of time in hours between each draw. Changing this will affect the current draw day/time. Set to 0 to disable drawings, the current tickets/jackpot will remain.',
	'LOTTERY_DRAW_PERIOD_SHORT'			=> 'The draw period has to be higher than 0!',
	'LOTTERY_ENABLE'					=> 'Enable Lottery Module',
	'LOTTERY_ENABLE_EXPLAIN'			=> 'This will allow users to use the Lottery Module',
	'LOTTERY_MAX_TICKETS'				=> 'Max. number of tickets',
	'LOTTERY_MAX_TICKETS_EXPLAIN'		=> 'Set the maximum number of tickets a user can buy',
	'LOTTERY_MULTI_TICKETS'				=> 'Allow multiple tickets',
	'LOTTERY_MULTI_TICKETS_EXPLAIN'		=> 'Set this to "Yes" to allow users to buy more than one ticket',
	'LOTTERY_NAME'						=> 'Name of your Lottery',
	'LOTTERY_NAME_EXPLAIN'				=> 'Enter a name for your Lottery, i.e. Our Forum Lottery',
	'LOTTERY_OPTIONS'					=> 'Lottery Settings',
	'LOTTERY_PM_ID'						=> 'Sender ID',
	'LOTTERY_PM_ID_EXPLAIN'				=> 'Enter here the user ID, which will be used as sender of the PM to the lucky winner (0 = use the winner’s ID)',
	'LOTTERY_TICKET_COST'				=> 'Ticket costs',
	'LOTTERY_VIEW'						=> 'Enable Points Lottery',
	'LOTTERY_VIEW_EXPLAIN'				=> 'This will enable the Lottery Module',

	'NO_RECIPIENT'						=> 'No recipient defined.',

	'POINTS_ADV_OPTIONS'				=> 'Advanced Points Settings',
	'POINTS_ADV_OPTIONS_EXPLAIN'		=> 'If Forum Points are set to 0 (disabled), all settings here are not calculated.',
	'POINTS_ATTACHMENT'					=> 'General points for adding attachments in a post',
	'POINTS_ATTACHMENT_PER_FILE'		=> 'Additional points for each file attachment',
	'POINTS_BONUS_CHANCE'				=> 'Point Bonus Chance',
	'POINTS_BONUS_CHANCE_EXPLAIN'		=> 'The chance a user receives bonus points for making a new topic, post or edit.<br />Chance is between 0 and 100%, you can use decimals.<br />Set to <strong>0</strong> to disable this feature.',
	'POINTS_BONUS_VALUE'				=> 'Point Bonus Value',
	'POINTS_BONUS_VALUE_EXPLAIN'		=> 'Give boundaries between which we will choose a random bonus amount.<br />If you want a fixed amount, set the minimum and the maximum the same.',
	'POINTS_COMMENTS'					=> 'Allow Comments',
	'POINTS_COMMENTS_EXPLAIN'			=> 'Allow users to leave comments with their points transfer/donation',
	'POINTS_CONFIG_SUCCESS'				=> 'The Ultimate Points settings have been updated successfully',
	'POINTS_DISABLEMSG'					=> 'Disabled message',
	'POINTS_DISABLEMSG_EXPLAIN'			=> 'Message to display, when the Ultimate Points System is disabled',
	'POINTS_ENABLE'						=> 'Enable Points',
	'POINTS_ENABLE_EXPLAIN'				=> 'Allow users to use Ultimate Points',
	'POINTS_GROUP_TRANSFER'				=> 'Group Transfer',
	'POINTS_GROUP_TRANSFER_ADD'			=> 'Add',
	'POINTS_GROUP_TRANSFER_EXPLAIN'		=> 'Here you can add, subtract or set values for a certain group. You also may send a personal message to each member of the group. Handy, if you like to send i.e. Christmas Greetings with a small present (you can use smilies and bbCodes). If you don’ want to send a personal message with your transfer, just leave the fields subject and comment empty.',
	'POINTS_GROUP_TRANSFER_FUNCTION'	=> 'Function',
	'POINTS_GROUP_TRANSFER_PM_COMMENT'	=> 'Comment for your personal message',
	'POINTS_GROUP_TRANSFER_PM_ERROR'	=> 'You need to enter the subject <strong>AND</strong> the comment in order to send a personal message with your group transfer!',
	'POINTS_GROUP_TRANSFER_PM_SUCCESS'	=> 'The Group Transfer was processed successfully and<br />the members of the group have received your personal message.',
	'POINTS_GROUP_TRANSFER_PM_TITLE'	=> 'Subject for the personal message',
	'POINTS_GROUP_TRANSFER_SEL_ERROR'	=> 'You cannot make a group transfer to the groups Bots and Guests!',
	'POINTS_GROUP_TRANSFER_SET'			=> 'Set',
	'POINTS_GROUP_TRANSFER_SUBSTRACT'	=> 'Subtract',
	'POINTS_GROUP_TRANSFER_SUCCESS'		=> 'The Group Transfer was processed successfully.',
	'POINTS_GROUP_TRANSFER_USER'		=> 'User group',
	'POINTS_GROUP_TRANSFER_VALUE'		=> 'Value',
	'POINTS_IMAGES_MEMBERLIST'			=> 'Display an image instead of points in profile',
	'POINTS_IMAGES_MEMBERLIST_EXPLAIN'	=> 'Display an image instead of the points name in users profiles',
	'POINTS_IMAGES_TOPIC'				=> 'Display an image instead of points',
	'POINTS_IMAGES_TOPIC_EXPLAIN'		=> 'Display an image in topics instead of the points name',
	'POINTS_LOGS'						=> 'Enable points logs',
	'POINTS_LOGS_EXPLAIN'				=> 'Allow users to view transfer logs',
	'POINTS_MINIMUM'					=> '&nbsp;Minimum', // &nbsp; is for alignment of input boxes for Points Bonus Value
	'POINTS_MAXIMUM'					=> 'Maximum',
	'POINTS_NAME'						=> 'Points',
	'POINTS_NAME_EXPLAIN'				=> 'The name you want to display instead of the word <em>Points</em> on your board',
	'POINTS_POLL'						=> 'Points per new poll',
	'POINTS_POLL_PER_OPTION'			=> 'Points per option in a poll',
	'POINTS_POST_PER_CHARACTER'			=> 'Points per character in new posts',
	'POINTS_POST_PER_WORD'				=> 'Points per word in new posts',
	'POINTS_SHOW_PER_PAGE'				=> 'Number of entries per page',
	'POINTS_SHOW_PER_PAGE_ERROR'		=> 'The number per page to show needs to be at least 5 entries.',
	'POINTS_SHOW_PER_PAGE_EXPLAIN'		=> 'Enter here the number of entries, which should be shown per page in the logs and the lottery history (min. 5)',
	'POINTS_SMILIES'					=> 'Smilies',
	'POINTS_STATS'						=> 'Display points statistics on index',
	'POINTS_STATS_EXPLAIN'				=> 'Display points statistics on the main board index page',
	'POINTS_TOPIC_PER_CHARACTER'		=> 'Points per character on new topics',
	'POINTS_TOPIC_PER_WORD'				=> 'Points per word on new topics',
	'POINTS_TRANSFER'					=> 'Allow Transfers',
	'POINTS_TRANSFER_EXPLAIN'			=> 'Allow users to transfer/donate points to each other',
	'POINTS_TRANSFER_FEE'				=> 'Transfer Fee',
	'POINTS_TRANSFER_FEE_EXPLAIN'		=> 'Percentage that is being helt back per transfer',
	'POINTS_TRANSFER_FEE_ERROR'			=> 'Transfer Fee can not be a 100% or more.',
	'POINTS_TRANSFER_PM'				=> 'Notify user by PM of a transfer',
	'POINTS_TRANSFER_PM_EXPLAIN'		=> 'Allow users to receive a notice by PM, when somebody send points to them',
	'POINTS_WARN'						=> 'Amount of points to be subtracted per user warning (set 0 to disable this feature)',

	'REG_POINTS_BONUS'					=> 'Registration Points Bonus',
	'RESYNC_ATTENTION'					=> 'The following actions cannot be undone!!',
	'RESYNC_DESC'						=> 'Reset User Points and Logs',
	'RESYNC_LOTTERY_HISTORY'			=> 'Reset the Lottery history',
	'RESYNC_LOTTERY_HISTORY_CONFIRM'	=> 'Are you sure, you want to reset the Lottery history?<br />Note: This action cannot be undone!',
	'RESYNC_LOTTERY_HISTORY_EXPLAIN'	=> 'This will reset the complete Lottery history',
	'RESYNC_POINTS'						=> 'Reset users points',
	'RESYNC_POINTSLOGS'					=> 'Reset users logs',
	'RESYNC_POINTSLOGS_CONFIRM'			=> 'Are you sure, you want to reset the users logs?<br />Note: This action cannot be undone!',
	'RESYNC_POINTSLOGS_EXPLAIN'			=> 'Delete all users logs',
	'RESYNC_POINTS_CONFIRM'				=> 'Are you sure, you want to reset all users points?<br />Note: This cannot be undone!',
	'RESYNC_POINTS_EXPLAIN'				=> 'Reset all users’ points accounts to zero',
	'ROBBERY_CHANCE'					=> 'Chance to make a successful robbery',
	'ROBBERY_CHANCE_ERROR'				=> 'The chance for a successful robbery cannot be higher than 100% !!',
	'ROBBERY_CHANCE_EXPLAIN'			=> 'Here you can set the percentage to make a successful robbery (the higher the value, the bigger the chance to be successful)',
	'ROBBERY_CHANCE_MINIMUM'			=> 'The chance for a successful robbery must be higher than 0% !!',
	'ROBBERY_ENABLE'					=> 'Enable Robbery Module',
	'ROBBERY_ENABLE_EXPLAIN'			=> 'This will allow users to use the robbery module',
	'ROBBERY_LOOSE'						=> 'Penalty on failed robbery',
	'ROBBERY_LOOSE_ERROR'				=> 'Penalty on failed robbery cannot be higher than 100% !!',
	'ROBBERY_LOOSE_EXPLAIN'				=> 'If a user robbery fails, the user who tried to rob someone else will lose x% of the desired robbery value',
	'ROBBERY_LOOSE_MINIMUM'				=> 'Penalty on failed robbery should not be 0%. You really should give the thieve a penalty !!',
	'ROBBERY_MAX_ROB'					=> 'Percentage of maximum robbery',
	'ROBBERY_MAX_ROB_ERROR'				=> 'You cannot set a value higher than 100% !!',
	'ROBBERY_MAX_ROB_EXPLAIN'			=> 'This value is the percentage of the users cash amount, which can be robbed at once',
	'ROBBERY_MAX_ROB_MINIMUM'			=> 'The value for the maximum Robbery should be higher than 0%. Otherwise this option does not make sense!',
	'ROBBERY_NOTIFY'					=> 'Send a Notification to the robbed user',
	'ROBBERY_NOTIFY_EXPLAIN'			=> 'This will activate the option to send a Notification to the attacked users',
	'ROBBERY_OPTIONS'					=> 'Robbery Settings',

	'TOP_POINTS'						=> 'Number of top rich members to display',
	'TOP_POINTS_EXPLAIN'				=> 'Here you can set the value for the most rich users to show. Works in different views',

	'UPLIST_ENABLE'						=> 'Enable Ultimate Points List',
	'UPLIST_ENABLE_EXPLAIN'				=> 'Allow users to use Ultimate Points List',
	'USER_POINTS'						=> 'User Points',
	'USER_POINTS_EXPLAIN'				=> 'Amount of points the user owns',
));

$help = array(
	array(
		0 => '--',
		1 => 'General'
	),
	array(
		0 => 'Edit posts',
		1 => 'If a user edit his post, the points for the post are re-calcualted and he only receives the points after the edits. But the post will only be re-calculated, if you set points for posting in this forum ( > 0 ) in the Forum ACP and the switch for posting is set to on.'
	),
	array(
		0 => 'Edit topics',
		1 => 'If a user edit his topic (so first post in a topic), he will only receive the points for generating a new topic. So in fact the topic will be completely re-calculated.
But the topic will only be re-calculated, if you set points for new topics for this forum ( > 0 ) in the Forum ACP and the switch for new topics is set to on.'
	),
	array(
		0 => 'Edit attachments',
		1 => 'If a user add an attachment to his post or he deletes an attachment, only the points for the attachments are calculated which are finally within the post.
If he deletes all attachments, the general points for attachments will be substracted too. Attachments are always calculated and they have nothing to do to with new topics or posts!'
	),
	array(
		0 => 'Edit polls',
		1 => 'If a user edit his poll, the poll will be completely re-calculated and he finally receives the points for those parts which are left. If you delete the poll, all poll points will be substracted and the user will receive the points as it was a new topic.
But the topic will only be re-calculated, if you set points for topics for in the advanced points settings ( > 0 ) in the Forum ACP and the switch for new topics is set to on. This is due the fact, that polls are always new topics!'
	),
	array(
		0 => 'Delete posts',
		1 => 'If a user deletes a post, the received points are substracted from his points account.
If a moderator deletes a post, the points for the user will remain on his account. Also if you have automatic pruning active, the points for the user will remain.'
	),
	array(
		0 => 'BBCodes',
		1 => 'All characters within a BBCode will be counted. The BBCode itself will not be counted.'
	),
	array(
		0 => 'Code blocks',
		1 => 'Everything within code blocks ( [code] [/code] ) will not be counted!'
	),
	array(
		0 => 'Smilies',
		1 => 'Smiles are not counted. But be aware, that between two smilies you have blanks, which are counted as a character!'
	),
	array(
		0 => 'Characters an special characters',
		1 => 'Every single character will be counted, if you have enabled the counting of characters. Characters are all letters, numbers, special characters and even empty spaces!'
	),
	array(
		0 => 'Quotes',
		1 => 'Everything between the quote BBCodes ( [quote] / [/quote] ) will not been counted! Only the post itself and the text outside the quote is counted.'
	),
	array(
		0 => 'Important note!',
		1 => 'Only text within BBCodes will be counted, but not the BBCode itself. The code will not be read out from the database!! So the starting [xxx] and the ending [/xxx] are the important codes. So if you don’t end a BBCode, only the text until the opening tag will be counted.
<br /><br />
If a user edits a post, for which he didn’t get points earlier (ie. before installing the extension or because you set it inactive for a while), the user won’t get points for editing!
<br /><br />
If a user edits a post or topic, where he didn’t get points from the advanced points part earlier, this post or topic won’t be recalculated!'
	),
	array(
		0 => '--',
		1 => 'Points settings'
	),
	array(
		0 => 'General',
		1 => 'Here you can enter a different name for your points, enable/disable the Ultimate Points System and enter a disable message.
Additionally you can enable/disable the different parts from the Ultimate Points System and some more stuff, which should be self explaning.'
	),
	array(
		0 => 'Group transfer',
		1 => 'With this option in the main points settings you have the possibility to transfer a certain amount of points to a group, remove or set all to the same value. If you fill the subject and the comment field, you can send a personal message to all members of the group. You can use BBCodes, but only the most common BBCodes are displayed in the mini box.'
	),
	array(
		0 => 'Reset user points',
		1 => 'With this option in the main points settings, you can reset all user points to zero. But be careful! <strong>This action cannot be undone!</strong>'
	),
	array(
		0 => 'Reset user logs',
		1 => 'With this option in the main points settings, you can reset all user logs. But be careful! <strong>This action cannot be undone!</strong>'
	),
	array(
		0 => '--',
		1 => 'Advanced points settings'
	),
	array(
		0 => 'Attachments',
		1 => 'You can give points for topics and posts with an attachment. The main points are given once and the additional points are given for each attachment.
You <strong>CANNOT</strong> disable attachments on per forum basis!'
	),
	array(
		0 => 'Polls',
		1 => 'You can give points for the poll itself (these are give once) and points for each poll option.
As polls are only possible in new topics, points are only given, if you set points ( > 0 ) for new topics in the forum settings and enabled the switch for new topics!'
	),
	array(
		0 => 'New topics',
		1 => 'Additionally to the main per topic points from the forum settings, you can give points for each word and/or points for each character.
If you set 0 in the forum or disabled the points for new topics, the additional points are not counted!'
	),
	array(
		0 => 'New posts/replies',
		1 => 'Additionally to the main per post points from the forum settings, you can give points for each word and/or points for each character.
If you set 0 in the forum or disabled the points for new posts, the additional points are not counted!'
	),
	array(
		0 => 'Points per warning',
		1 => 'If a user gets warned, you have the possibility to substract points from his account. If the user hasn’t enough points, the value will be substracted anyway. He then will have negative points!'
	),
	array(
		0 => 'Points for registering',
		1 => 'Here you can set how much points a user will receive on registering on your board. This way he will have a seed capital. These points are given at once. So not after releasing his account!'
	),
	array(
		0 => 'Points Bonus Chance',
		1 => 'Here you can set the percentage for the chance of a user receiving a bonus Points amount, on top of the amount he receives for making a new topic or post, or editing an existing one. You can use decimals, these are factored in when making the calculations.<br />Set to <strong>0</strong> to disable this feature, so nobody will have a chance at bonus points.'
	),
	array(
		0 => 'Points Bonus Value',
		1 => 'Here you can set the minimum and the maximum between we will generate a random amount of points that we will give as a bonus, if the user is lucky enough to get a bonus. If you want a fixed amount as bonus value, set the minimum and the maximum to <strong>exactly</strong> the same value.'
	),
	array(
		0 => 'Entries per page',
		1 => 'Here you can set how much entries are shown per page in the Logs and the Lottery history. Minimum value is 5.'
	),
	array(
		0 => 'Number of most rich users',
		1 => 'Here you can set, how much of the most rich users are shown. You will see this number at multiple places: On the index, at the bank and in the overview.
Set 0 to deactivate this feature. On the index page the part will not be visible any more and in the bank and the overview, users will see a corresponding message.'
	),
	array(
		0 => '--',
		1 => 'Forum points settings'
	),
	array(
		0 => 'General',
		1 => 'The forum points are mostly independent from the other points settings and will be counted additionally. You can set the points per forum. This way you can set the points, users will receive, completely	individually. You will find these settings under ACP - Forums - Manage Forums - Forum you like to edit.'
	),
	array(
		0 => 'The switches',
		1 => 'With the forum points switches, enable/disable the forum points globally. If you disable Points for topics, posts or edit, points are NOT counted in all forums. Additionally the advanced points are not counted, until you enable the switches again.'
	),
	array(
		0 => 'Global forum points settings',
		1 => 'You can set the points globally here for all forums at once. These settings will overwrite any previously individual points settings! So if you use this feature, you have to rework all forums, where you set different points!'
	),
	array(
		0 => 'New Topic',
		1 => 'Here you can set, how much points a user will receive for creating a new topic. You can set it globally or individually via the ACP -> Forums.
If you set 0, also the advanced points settings (words, characters) are NOT counted.'
	),
	array(
		0 => 'New post',
		1 => 'Here you can set, how much points a user will receive for creating a new post or reply. You can set it globally or individually via the ACP -> Forums.
If you set 0, also the advanced points settings (words, characters) are NOT counted.'
	),
	array(
		0 => 'Edit topic/post',
		1 => 'Here you can set, if a user will gain points for editing a topic or a post.'
	),
	array(
		0 => 'Points Per Attachment Download',
		1 => 'Here you can set, how much a user has to pay to download an attachment, this is per attachment and not per post with attachment. You can specify through permissions which users/groups have to pay for attachment, and who don’t! <br />
		<strong>Important Note (1):</strong> Attachments in Private Messages <em>(PM)</em> are excluded from this setting/payment. Attachments sent through PM’s can be downloaded freely.<br />
		<strong>Important Note (2):</strong> Image attachments in posts are excluded from this setting/payment. As images are shown directly in posts, every time a user visits the topic and only <em>views</em> the post, it would already substract the points. Therefore image attachments are excluded from payment.'
	),
	array(
		0 => 'Points to pay for new topic',
		1 => 'Here you can set, how much a user has to pay to make a new topic in a specific forum. This is per forum specific, you can set them all at once through the Forum Point Settings or per individual forum. Afterwards you’ll have to set permissions for which users/groups have to pay and which do not.'
	),
	array(
		0 => 'Points to pay for new post',
		1 => 'Here you can set, how much a user has to pay to make a new post <em>(reply)</em> in a specific forum. This is per forum specific, you can set them all at once through the Forum Point Settings or per individual forum. Afterwards you’ll have to set permissions for which users/groups have to pay and which do not.'
	),
	array(
		0 => '--',
		1 => 'Bank'
	),
	array(
		0 => 'General',
		1 => 'If the bank is activated, the users will see an additional tab in Ultimate Points main menu. Additionally you will find infos in the profile view and in the viewtopic part, where admin/moderators have the possibility to change the users amounts of the points and the bank, if allowed.'
	),
	array(
		0 => 'Interest rate',
		1 => 'Here you can set an interest rate between 0 and 100 percent per pay period. The pay period is set as an "in days" period. After this period the users will get their interest rate payed out automatically. You can also define, at what amount these payments will stop giving interest. So as soon as an user has more on his bank account, as you defined, he won’t get any additional payments. So interest payments will be given only for the value you set.'
	),
	array(
		0 => 'Bank costs',
		1 => 'Here you can set the cost for withdrawing money from the bank account. You can set any value between 0 to 100 percent. Additionally you can set a fixed cost value for maintaining the bank account per period. This one will have the same period as the the interest rate.'
	),
	array(
		0 => '--',
		1 => 'Lottery'
	),
	array(
		0 => 'General',
		1 => 'If the Lottery is enabled, the users will have access to the Lottery module.
If you disable the module, the Lottery is still running in the background, but the users won’t have access. The Lottery will run at the pre-defined period via the lottery page or the index page.'
	),
	array(
		0 => 'How the Lottery works',
		1 => 'With a random calculation, one ticket out of all purchased tickets, is selected as a possible winner ticket. Afterwards another random calculation defines - using the the value of the chance to win - if the selected ticket really wins or not. If it does not win, the value goes to the Jackpot until one ticket wins.'
	),
	array(
		0 => 'Jackpot',
		1 => 'The Lottery works with a Jackpot system. So the value from all bought tickets will go into the Jackpot. Additionally you can define a starting value for the Jackpot, which will be payed out additionally. If none wins, the Jackpot will remain and grows with the next playing round.'
	),
	array(
		0 => 'Chance to win',
		1 => 'Here you can set the chance to win. The users will not see this value. The higher you set this value, the bigger is the chance to win.
0 means none will win, 100 means the Jackpot will be payed out to one of the players.'
	),
	array(
		0 => 'Paying period',
		1 => 'You can set the paying period in hours. This does have an effect immediately!
If you set the paying period to 0, the payout will stop.
The users cannot pay any tickets and the Jackpot will remain with it’s current value.
You can use this feature to force a payout. As soon as you set a new value, the payout will start at the next call of the page.'
	),
	array(
		0 => 'Enter next draw time',
		1 => 'Enter here your next draw time for the lottery. You have to use the UNIX time format. You can get it from <a href="http://www.onlineconversion.com/unix_time.htm" onclick="window.open(this.href); return false">OnlineConversion.com</a>. This one is needed only once. During the regular run this will change with the paying period.'
	),
	array(
		0 => 'Sender ID',
		1 => 'Here you can set the ID of the user, who will send the lucky user the winning message via a personal message. If you don’t like to use a different sender, set 0 here. The user will then receive the message from himself.'
	),
	array(
		0 => '--',
		1 => 'Robbery'
	),
	array(
		0 => 'General',
		1 => 'With the Robbery module the user may rob points from other users point account (not the bank!). You can enable/disable this module. If it is disabled, the users won’t see the module.'
	),
	array(
		0 => 'Personal message settings',
		1 => 'Here you can set, if the users are informed about the robbery tries. If the user set in his personal settings, that he won’t receive personal messages from other users, he won’t get messages from the Robbery module.
If the one who tries to rob another user is blocked from sending PMs, the robbed user still gets a message. This messages are pre-defined and the user, who tried to rob, does not have any influence on this message.
Every user can set in the fronted Robbery module, if he likes to be informed by the Robbery module, if someone tried to rob him or if the robbery was successful. If the sending of PMs is deactivated, the user won’t see this option.'
	),
	array(
		0 => 'Chance for successful robbery',
		1 => 'Here you can set the chance to make a successful robbery in percent. So you can set any value between 0 and 100 percent.'
	),
	array(
		0 => 'Penalty for a failed robbery',
		1 => 'Here you can set the penalty a user has to pay, if his robbery fails.
The thief will have to pay the set percentage of the value he tried to rob. What a user has to pay, if he fails, is shown on the Robbery page. You can set any value between 0 and 100 percent.'
	),
	array(
		0 => 'Maximum value, which can be robbed at once',
		1 => 'Here you can set the maximum percentage of the points the robbed user owns, which can be robbed at once. This value is shown on the Robbery page. You can use any value between 0 and 100 percent.'
	),
	array(
		0 => 'Usage of the penalty for the failed robbery',
		1 => 'Here you can set, what you like to to do with penalty for a failed robbery. You can either directly transfer it to the Lottery Jackpot or randomly select, if the penalty should go the robbed user account or to the Lottery Jackpot.'
	),
	array(
		0 => '--',
		1 => 'Transfer / Donate'
	),
	array(
		0 => 'General',
		1 => 'If the users have the permission, the users will have the possibility to transfer points from their own account to another users point account. This can be done from the Transfer page, from the viewtopic view or from the profile view.'
	),
	array(
		0 => 'Personal message with transfers',
		1 => 'You can enable/disable this feature within the main points setting page in the ACP. If user is blocked from sending PMs, he cannot add a comment to his transfer.'
	),
	array(
		0 => 'Logs',
		1 => 'All transfers incl. all the needed informations are shown on the logs page. This feature can be enabled/disabled on the main point settings page. You also have the possibility to reset ALL users logs. But be aware, this cannot be undone!'
	),
	array(
		0 => '--',
		1 => 'Permissions'
	),
	array(
		0 => 'Administrator permissions',
		1 => 'You can give the administrator the right to manage the Ultimate Points System. This can be done in ACP -> Permissions -> Administrator permissions -> Advanced permissions.'
	),
	array(
		0 => 'Global moderators permissions',
		1 => 'Within the module ACP -> Permissions -> Global moderators you can set, if they will have the permission to change the points and the bank accounts from other users.'
	),
	array(
		0 => 'User and group permissions',
		1 => 'Within the module ACP -> Permissions -> User/Group permissions, you can set different things concerning the Ultimate Points System. See below:
<ul>
	<li>Can use the Ultimate Points</li>
	<li>Can use the Bank Module</li>
	<li>Can use the Log Module</li>
	<li>Can use the Lottery Module</li>
	<li>Can use the Robbery Module</li>
	<li>Can use the Transfer Module</li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Other',
	),
	array(
		0 => 'Change points icon',
		1 => 'To clarify: The points icon is the icon in your overall_header, just before the link that will take you to the Ultimate Points modules <em>(such as Overview, Lottery, Robbery, etc..)</em> and <strong>NOT</strong> the icon behind your points through out the forum!<br />
				<ul><li>Changing Image<br />You can change this item by replacing the image in <em>root/ext/dmzx/ultimatepoints/styles/all/theme/images/</em>, make sure it is named <strong>icon_points.gif</strong> and has the size of <strong>12px by 12px</strong>!</li>
				<li>Adding new Image<br />Or you can add a new image to <em>root/ext/dmzx/ultimatepoints/styles/all/theme/images/</em>, <br />
				and then you’ll have to edit <em>root/ext/dmzx/ultimatepoints/styles/all/theme/ultimatepoints.css</em>, <br />
				and change the <strong>.icon-points { background-image: url("./images/<em>your_image_name.gif</em>"); }</strong></li></ul>'
	),
	array(
		0 => 'Change points image',
		1 => 'To clarify: The points image is the images that shows up behind your currency through out the forum, viewtopics and profiles.<br />
				<ul><li>Changing Image<br />
				You can upload a new image to <em>root/ext/dmzx/ultimatepoints/styles/all/theme/images/</em>, <br />
				This image <strong>HAS</strong> to be named <strong>money.png</strong> and has to be <strong>11px by 11px</strong>!'
		),
);
