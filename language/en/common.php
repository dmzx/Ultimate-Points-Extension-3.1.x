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

$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Ultimate Points',
	'ACP_POINTS_BANK_TITLE'				=> 'Bank Settings',
	'ACP_POINTS_FORUM_TITLE'			=> 'Forum Points Settings',
	'ACP_POINTS_INDEX_TITLE'			=> 'Point Settings',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Lottery Settings',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Robbery Settings',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'User Guide',

	'BANK_ACCOUNT_OPENING'				=> 'Open an account',
	'BANK_ACCOUNT_OPENED'				=> 'Opened an bank account on',
	'BANK_ACTIONS'						=> 'Actions',
	'BANK_BACK_TO_BANK'					=> '%sClick here to return to the bank%s',
	'BANK_BACK_TO_INDEX'				=> '%sClick here to return to the index%s',
	'BANK_BALANCE'						=> 'Balance',
	'BANK_BUTTON_DEPOSIT'				=> 'Deposit',
	'BANK_BUTTON_WITHDRAW'				=> 'Withdraw',
	'BANK_COST'							=> 'Account costs per period',
	'BANK_DEPOSIT_SMALL_AMOUNT'			=> 'The smallest amount you can deposit is %s %s.',
	'BANK_DEPOSIT_WITHDRAW'				=> 'Deposit & Withdraw',
	'BANK_DESCRIPTION'					=> 'Your are here in our bank. We only count low costs for a payout, but we also pay money with a defined interest rate. If you open an account, you can save your money from being robbed. So it\'s worth to think about it.<br /><br />',
	'BANK_DISABLED'						=> 'Bank is disabled',
	'BANK_ERROR_DEPOSIT'				=> 'You have specified an incorrect or an invalid deposit amount',
	'BANK_ERROR_NOT_ENOUGH_DEPOSIT'		=> 'You do not own enough %1$s to deposit this amount',
	'BANK_ERROR_NOT_ENOUGH_WITHDRAW'	=> 'Your account does not show enough %1$s to withdraw this amount',
	'BANK_ERROR_PAYOUTTIME_SHORT'		=> 'You must specify a higher payout time than <em>Zero</em> in the bank configuration',
	'BANK_ERROR_WITHDRAW'				=> 'You have specified an incorrect or an invalid withdrawal amount',
	'BANK_FROM_ACCOUNT'					=> 'from your bank account',
	'BANK_HAVE_DEPOSIT'					=> 'You have deposited',
	'BANK_HAVE_WITHDRAW'				=> 'You have withdrawn',
	'BANK_HOLDING'						=> 'Total Holdings',
	'BANK_INFO'							=> 'Bank Information',
	'BANK_INTEREST_PERIOD'				=> 'Period for payout of interests',
	'BANK_INTEREST_RATE'				=> 'Interest Rate',
	'BANK_LEAVE_WITH'					=> 'Leaving you with',
	'BANK_MAX_HOLD'						=> 'Max. value for interests',
	'BANK_MIN_DEPO'						=> 'Minimum deposit',
	'BANK_MIN_WITH'						=> 'Minimum withdrawal',
	'BANK_NEW_BALANCE'					=> 'Your new balance is',
	'BANK_NOW_HAVE'						=> 'You now have',
	'BANK_NO_ACCOUNT'					=> 'User doesn\'t have an account at the %1$s',
	'BANK_NOBODY_IN_BANK'				=> 'Currently nobody has deposited %1$s in the %2$s',
	'BANK_ON_HAND'						=> 'on hand',
	'BANK_OPEN_ACCOUNT'					=> '%sClick here to open an account%s',
	'BANK_RICHEST_USER'					=> 'The Richest banker',
	'BANK_START_BALANCE'				=> 'Your starting balance is 0.',
	'BANK_TITLE_MAIN'					=> 'Bank',
	'BANK_TOTAL_ACCOUNTS'				=> 'Total opened accounts',
	'BANK_TO_ACCOUNT'					=> 'into your bank account',
	'BANK_USER_NO_ACCOUNT'				=> 'You don\'t have an account with the %1$s yet.',
	'BANK_WELCOME_BANK'					=> 'Welcome to the',
	'BANK_WITHDRAW_RATE'				=> 'Withdrawal Rate',
	'BANK_WITHDRAW_SMALL_AMOUNT'		=> 'The smallest amount you can withdraw, is %s %s.',
	'BANK_YOUR_ACCOUNT'					=> 'You can now deposit and withdraw to and from your account',

	'EDIT_BANK_MODIFY'					=> 'Bank Administration',
	'EDIT_NO_ID_SPECIFIED'				=> 'You have not specified a username',
	'EDIT_POINTS_ADMIN'					=> 'Points Admin',
	'EDIT_POINTS_MODIFY'				=> '%s Administration',
	'EDIT_POINTS_SET'					=> 'The user\'s %1$s have been updated.<br /><br />',
	'EDIT_P_BANK_TITLE'					=> 'Here you can modify a user\'s bank %s.',
	'EDIT_P_POINTS_TITLE'				=> 'Here you can modify a user\'s %s.',
	'EDIT_P_RETURN_INDEX'				=> '%1$sClick here to return to the index.%2$s',
	'EDIT_P_RETURN_POST'				=> '%1$sClick here to return to the previous post.%2$s',
	'EDIT_SET_AMOUNT'					=> 'New Amount',
	'EDIT_ADD_AMOUNT'					=> 'Add Amount',
	'EDIT_SUB_AMOUNT'					=> 'Subtract Amount',
	'EDIT_USER_NOT_EXIST'				=> 'This user doesn\'t exist.',

	'INFO_GENERAL_INFORMATIONS'			=> 'General Information',
	'INFO_ATTACH'						=> 'Points per attachment in a new post',
	'INFO_ADD_ATTACH'					=> 'Points for each new attachment',
	'INFO_BONUS_CHANCE'					=> 'Points Bonus',
	'INFO_BONUS_CHANCE_EXPLAIN'			=> 'You currently have %1$s &#37; chance to get a bonus increment of %2$s to %3$s %4$s',
	'INFO_NO_COST'						=> 'Currently you don\'t have to pay any %1$s for this',
	'INFO_NO_POINTS'					=> 'Currently you won\'t receive any %1$s for this',
	'INFO_POLL'							=> 'Points for new polls',
	'INFO_POLL_OPTION'					=> 'Points per option in a new poll',
	'INFO_TOPIC_WORD'					=> 'Points per word in a new topic',
	'INFO_TOPIC_CHARACTER'				=> 'Points per character in a new topic',
	'INFO_POST_WORD'					=> 'Points per word in a new post',
	'INFO_POST_CHARACTER'				=> 'Points per character in a new post',
	'INFO_COST_DL_ATTACH'				=> 'Costs per download of an attachment',
	'INFO_COST_WARNING'					=> 'Costs per warning',
	'INFO_REG_BONUS'					=> 'Points bonus upon registration',

	'LOGS_COMMENT'						=> 'Comment',
	'LOGS_DATE'							=> 'Date',
	'LOGS_DESCRIPTION'					=> 'Here you will see your logs.<br />You will see a list of all transfers you have sent or which you received.<br />If you are looking for a certain transfer, just use the sort option.<br /><br />',
	'LOGS_REASON_NOLOGS'				=> 'There are no logs available.',
	'LOGS_RECV'							=> 'Received',
	'LOGS_ROBBERY_LOST'					=> 'Robbery lost',
	'LOGS_ROBBERY_WON'					=> 'Robbery won',
	'LOGS_SENT'							=> 'Sent',
	'LOGS_SORT_COMMENT'					=> 'Comment',
	'LOGS_SORT_DATE'					=> 'Date',
	'LOGS_SORT_FROMNAME'				=> 'From',
	'LOGS_SORT_TONAME'					=> 'Sent to',
	'LOGS_SORT_TYPE'					=> 'Type',
	'LOGS_TITLE'						=> '%1$s Logs',
	'LOGS_TO'							=> 'To',
	'LOGS_TYPE'							=> 'Type',
	'LOGS_WHO'							=> 'Who',
	'LOTTERY_ACTIONS'					=> 'Actions',
	'LOTTERY_BACK'						=> 'Back to the main Lottery page',
	'LOTTERY_DATE'						=> 'Date',
	'LOTTERY_DESCRIPTION'				=> 'The value of your bought tickets will go into the Jackpot. The Jackpot already holds %1$s %2$s per round. The more players the round contains, the higher the Jackpot will be of course. After the draw period, a winner is selected at random. If nobody wins, the Jackpot will grow even further. May the odds be ever in your favor!<br /><br />',
	'LOTTERY_DISABLED'					=> 'The Lottery is disabled.',
	'LOTTERY_HISTORY'					=> 'History',
	'LOTTERY_INFO'						=> 'Lottery Information',
	'LOTTERY_INVALID_INPUT'				=> 'You need to enter a valid number in order to buy tickets.',
	'LOTTERY_JACKPOT'					=> 'Jackpot',
	'LOTTERY_LACK_FUNDS'				=> 'You lack funds to make that purchase!',
	'LOTTERY_LAST_WINNER'				=> 'The last winner was',
	'LOTTERY_MAX_TICKETS'				=> 'Max. number of tickets per round and player',
	'LOTTERY_MAX_TICKETS_LEFT'			=> 'You only have <strong>%1$s</strong> tickets left, which can be bought during this round!',
	'LOTTERY_MAX_TICKETS_REACH'			=> 'You are not allowed to buy more than <strong>%1$s</strong> tickets per round!',
	'LOTTERY_NEGATIVE_TICKETS'			=> 'You can\'t buy negative or 0 tickets!<br />So you need to buy at least 1 ticket!',
	'LOTTERY_NEVER_WON'					=> 'You have never won the Lottery!',
	'LOTTERY_NEXT_DRAWING'				=> 'Next draw will be on',
	'LOTTERY_NO_WINNER'					=> 'No winner this time',
	'LOTTERY_NO_WINNERS'				=> 'None has won a lottery yet.',
	'LOTTERY_PLAYERS'					=> 'Number of players up to now',
	'LOTTERY_PM_BODY'					=> 'Congratulations! You have won %1$s in our Lottery! %2$s',
	'LOTTERY_PM_CASH_ENABLED'			=> 'Your winnings have been deposited into your account, enjoy it!<br /><br /><i>The Lottery Management</i>',
	'LOTTERY_PM_COMMISION'				=> 'The Lottery Management',
	'LOTTERY_PM_SUBJECT'				=> 'You won the lottery!',
	'LOTTERY_PURCHASE_TICKET'			=> 'Buy Ticket',
	'LOTTERY_PURCHASE_TICKETS'			=> 'Buy Tickets',
	'LOTTERY_TICKETS'					=> 'Sold tickets up to now',
	'LOTTERY_TICKET_COST'				=> 'Ticket Costs',
	'LOTTERY_TICKET_PURCHASED'			=> 'Your ticket purchase is completed!',
	'LOTTERY_TITLE_DESCRIPTION'			=> 'What are the rules to play?',
	'LOTTERY_TITLE_MAIN'				=> 'Lottery',
	'LOTTERY_TOTAL_WINNERS'				=> 'Total Winners',
	'LOTTERY_VIEWER_TICKETS'			=> 'Tickets you own',
	'LOTTERY_VIEW_HISTORY'				=> 'View past winners',
	'LOTTERY_VIEW_SELF_HISTORY'			=> 'View your winning history',
	'LOTTERY_WINNINGS'					=> 'Amount Won',
	'LOTTERY_WON'						=> 'Won by',

	'MAIN_BANK_HAVE'					=> 'In your bank account you have an additional %1$s %2$s.',
	'MAIN_HELLO_USERNAME'				=> 'Hello %1$s !',
	'MAIN_LOTTERIES_NONE'				=> 'No winners yet..',
	'MAIN_LOTTERY_TICKETS'				=> 'You currently own %1$s tickets.',
	'MAIN_LOTTERIES_WON'				=> 'Most Lotteries won',
	'MAIN_MOST_DONATED'					=> 'Most donated',
	'MAIN_MOST_DONATED_NONE'			=> 'No donations made yet..',
	'MAIN_ON_HAND'						=> 'You currently have %1$s %2$s on hand.',
	'MAIN_RICH_BANK'					=> 'Richest banker',
	'MAIN_RICH_BANK_NONE'				=> 'Nobody is banking..',
	'MAIN_USERNAME_LOCKED'				=> 'This user is locked and cannot use the points system.',

	'NOTIFICATION_BANK_PAYOUT'			=> 'Your bank interest has been paid out and added to your balance',
	'NOTIFICATION_RANDOM_BONUS'			=> 'You received %1$s %2$s random bonus!',
	'NOTIFICATION_ROBBERY_FAILED'		=> 'tried to rob you, but failed!',
	'NOTIFICATION_ROBBERY_SUCCES'		=> 'has robbed %1$s %2$s from you!',
	'NOTIFICATION_POINTS_UCP'			=> 'Receive notification about points <em>(successful/failed robbery, bonus points, etc..)</em>',

	'POINTS'							=> 'Points',
	'POINTS_ATTACHMENT_MINI_POSTS'		=> 'You need more %1$s in order to download this attachment!',
	'POINTS_BANK'						=> 'Bank',
	'POINTS_BPOINTS_TOTAL'				=> 'Total in Bank: %1$s %2$s',
	'POINTS_BOT_GUEST'					=> '<strong>If you would have registered with us, you would be able to use this function!</strong>',
	'POINTS_BUPOINTS_TOTAL'				=> 'Bank Accounts : %1$s',
	'POINTS_CASH_ON_HAND'				=> 'Cash on hand',
	'POINTS_COPYRIGHT'					=> 'Ultimate Points by <a href="http://die-muellers.org" onclick="window.open(this.href); return false">femu</a> &amp; <a href="http://www.spieleresidenz.de" onclick="window.open(this.href); return false">Wuerzi</a> v',
	'POINTS_COPYRIGHTS'					=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx &amp; posey</a>',
	'POINTS_DESCRIPTION'				=> 'Description',
	'POINTS_DISABLED'					=> 'Ultimate Points is currently disabled.',
	'POINTS_DONATE'						=> '[Donate]',
	'POINTS_DOWNLOAD_COST'				=> 'Download Cost',
	'POINTS_EXPLAIN'					=> 'Ultimate Points',
	'POINTS_INFO'						=> 'Information',
	'POINTS_INFO_DESCRIPTION'			=> 'Here you will find additional information for our %1$s policy.<br /><br />In addition to these values, you might receive additional %1$s in certain topics.<br /><br />Please be aware, that the forum owner has the ability to disable complete forums from getting %1$s!',
	'POINTS_INSUFFICIENT_POST'			=> 'You do not have sufficient %2$s to make a post in this forum. The cost of making a post in this forum is <strong>%1$s %2$s</strong>.',
	'POINTS_INSUFFICIENT_TOPIC'			=> 'You do not have sufficient %2$s to make a new topic in this forum. The cost of making a topic in this forum is <strong>%1$s %2$s</strong>.',
	'POINTS_LOCKED'						=> 'Locked',
	'POINTS_LOGS'						=> 'Logs',
	'POINTS_LOG_COUNT'	=> array(
		1 => '%d entry',
		2 => '%d entries',
	),
	'POINTS_LIST'						=> 'UP List',
	'POINTS_LIST_DISABLE'				=> 'Ultimate Points list disabled',
	'POINTS_LIST_NO_USER'				=> 'No users with points',
	'POINTS_LIST_TOTAL'					=> 'Ultimate Points List',
	'POINTS_LIST_USER'					=> '1 user',
	'POINTS_LIST_USERS'					=> '%s users',
	'POINTS_LOG_TOTAL'					=> 'Total',
	'POINTS_LOTTERY'					=> 'Lottery',
	'POINTS_LOTTERY_TIME'				=> 'Next draw: %1$s',
	'POINTS_MODIFY'						=> '[Modify]',
	'POINTS_MOST_RICH_CASH_USERS'		=> 'Users with most cash',
	'POINTS_MOST_RICH_USERS'			=> 'Richest User',
	'POINTS_MOST_RICH_USERS_DISABLED'	=> 'This display is disabled by the Admin',
	'POINTS_NO_USER'					=> 'This username is invalid',
	'POINTS_NUMBER_FORMAT_EXPLAIN'		=> 'Hint: Always enter values without the thousands separator and decimals with a point, i.e. 1000.50',
	'POINTS_OPTIONS'					=> 'Options',
	'POINTS_OVERVIEW'					=> 'Overview',
	'POINTS_RECEIVED_EDIT_MESSAGE'		=> 'You received <strong>%1$s %2$s</strong> for the edit of the post',
	'POINTS_RECEIVED_POST_MESSAGE'		=> 'You received <strong>%1$s %2$s</strong> for your new topic',
	'POINTS_RECEIVED_REPLY_MESSAGE'		=> 'You received <strong>%1$s %2$s</strong> for your post',
	'POINTS_RETURN_INDEX'				=> 'Click here to return to the index',
	'POINTS_ROBBERY'					=> 'Robbery',
	'POINTS_SEPARATOR_DECIMAL'			=> '.',
	'POINTS_SEPARATOR_THOUSANDS'		=> ',',
	'POINTS_STATISTICS'					=> 'Points Statistics',
	'POINTS_TITLE_MAIN'					=> '%1$s Control Panel',
	'POINTS_TOTAL'						=> 'Total Cash on Hand: %1$s %2$s',
	'POINTS_TRANSFER'					=> 'Transfer',
	'POINTS_TRANSFER_RECIEVED'			=> 'Transfers received',
	'POINTS_VIEWING'					=> 'Browsing points console',

	'ROBBERY_AMOUNT'					=> 'Amount',
	'ROBBERY_AMOUNTLOSE'				=> 'If you are not successful, you will loose an additional <strong> %s percent</strong> of the value you wanted to rob!<br /><br />',
	'ROBBERY_BAD'						=> 'Sorry ... your robbery has failed!',
	'ROBBERY_DATE'						=> 'Robbed on date',
	'ROBBERY_CHANCE'					=> 'Here you can try to rob another user. But you only can try to rob <strong>%1$s percent</strong> of the user\'s current cash amount!<br /><br />Like in real life, crime isn\'t really successful. Your chance to be successful with your robbery is <strong> %2$s percent</strong>.',
	'ROBBERY_DISABLED'					=> 'The Robbery system is disabled',
	'ROBBERY_MAX_ROB'					=> 'You cannot rob more than <strong>%1$s percent</strong> of the users cash amount at once!',
	'ROBBERY_NO_ID_SPECIFIED'			=> 'You have not specified a username',
	'ROBBERY_SELF'						=> 'You can\'t rob yourself.',
	'ROBBERY_SET_AMOUNTR'				=> 'The amount you would like to rob',
	'ROBBERY_SET_USERNAMES'				=> 'Name of the members that robbed you!',
	'ROBBERY_SET_USERNAMER'				=> 'Name of the user you would like to rob',
	'ROBBERY_START'						=> 'Start Robbery',
	'ROBBERY_SUCCESFUL'					=> 'You have successfully made a great robbery!',
	'ROBBERY_TOO_SMALL_AMOUNT'			=> 'You need to rob a little more!<br />The entered value is too small ...',
	'ROBBERY_TO_MUCH'					=> 'You are trying to rob too many points, if you fail you will not be able to pay the damage ...',
	'ROBBERY_TO_MUCH_FROM_USER'			=> 'You are trying to rob more than the user has.',

	'TRANSFER_AMOUNT'					=> 'Amount',
	'TRANSFER_SET_USERNAMES'			=> 'Name of the members that donated to you!',
	'TRANSFER_DATE'						=> 'Transfer received on',
	'TRANSFER_RECEIVED_DISABLED'		=> 'The transfer system is disabled',
	'TRANSFER_RECEIVED'					=> '%1$s received',

	'TIME_DAY'							=> 'day',
	'TIME_DAYS'							=> 'days',
	'TIME_HOUR'							=> 'hour',
	'TIME_HOURS'						=> 'hours',
	'TIME_MINUTE'						=> 'min',
	'TIME_MINUTES'						=> 'mins',
	'TIME_MONTH'						=> 'month',
	'TIME_MONTHS'						=> 'months',
	'TIME_SECOND'						=> 'sec',
	'TIME_SECONDS'						=> 'secs',
	'TIME_WEEK'							=> 'week',
	'TIME_WEEKS'						=> 'weeks',
	'TIME_YEAR'							=> 'year',
	'TIME_YEARS'						=> 'years',
	'TRANSFER_AMOUNT'					=> 'Amount to transfer',
	'TRANSFER_COMMENT'					=> 'Comment',
	'TRANSFER_DESCRIPTION'				=> 'Here you can transfer a few %1$s. Simply add the receiver\'s name and the amount of points you would like to donate and click send. The transfer will be logged in your log files.',
	'TRANSFER_FEE'						=> 'Transfer Fee',
	'TRANSFER_FEE_EXPLAIN'				=> 'Percentage that is being helt back from your transfer',
	'TRANSFER_NO_USER_RETURN'			=> '<strong>The selected username is invalid!</strong>',
	'TRANSFER_PM_BODY'					=> 'You received a donation of %1$s %2$s with the following comment: <br /><i>%3$s</i>',
	'TRANSFER_PM_SUBJECT'				=> 'You have received a donation!',
	'TRANSFER_REASON_MINPOINTS'			=> 'You do not have enough %1$s to transfer.',
	'TRANSFER_REASON_TRANSFER'			=> 'The Admin has disabled transferring',
	'TRANSFER_REASON_TRANSUCC'			=> 'You successfully transferred <strong>%1$s %2$s</strong> to <strong>%3$s</strong>!',
	'TRANSFER_REASON_UNDERZERO'			=> 'You cannot transfer under 0.00 %1$s.',
	'TRANSFER_REASON_YOURSELF'			=> 'You cannot transfer %1$s to yourself!',
	'TRANSFER_SET_USERNAME'				=> '<b>Name of the user you want to make a donation:</b>',
	'TRANSFER_TITLE'					=> '%1$s Transfer',
	'TRANSFER_TO_NAME'					=> 'You want to transfer some <strong>%2$s</strong> to <strong>%1$s</strong>',

	'UP_INSERT_FIRST_FILL'				=> 'The tables were filled successfully with some basic datas.',
	'UP_REMOVE_CONFIG_ENTRIES'			=> 'The entries in the config table were removed successfully',
	'UP_REMOVE_FORUM_ENTRIES'			=> 'The entries in the forums table were removed successfully',
	'UP_ULTIMATE_POINTS_NAME'			=> 'Ultimate Points',
	'UP_ULTIMATE_POINTS_NAME_EXPLAIN'	=> 'With this extension you will give your users the possibility to collect and spend points. Click on the below actions to perform, what you like to do. Enabling <strong>Display Full Results</strong> is recommended.<br /><br />Have fun!',
	'UP_UPDATE_SUCCESFUL'				=> 'The tables were updated successfully',

	'WARN_USER_POINTS'					=> 'Additionally we deducted %1$s %2$s from your account!',
	'WARN_MOD_POINTS'					=> 'Additionally %1$s %2$s has been deducted from %3$s\'s account!',
));
