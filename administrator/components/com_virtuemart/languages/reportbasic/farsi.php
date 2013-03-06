<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
* Translated by Mohammad Hosin Fazeli
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_RB_INDIVIDUAL' => 'ليست كالاهاي شخصي',
	'PHPSHOP_RB_SALE_TITLE' => 'گزارش فروش', // not used?
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'مروري بر فعاليت فروش', // not used?
	'PHPSHOP_RB_INTERVAL_TITLE' => 'در فاصله زماني',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'ماهيانه',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'هفتگي',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'روزانه',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'اين ماه',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'آخرين ماه',
	'PHPSHOP_RB_LAST60_BUTTON' => '60 روزه',
	'PHPSHOP_RB_LAST90_BUTTON' => '90 روزه',
	'PHPSHOP_RB_START_DATE_TITLE' => 'شروع',
	'PHPSHOP_RB_END_DATE_TITLE' => 'پايان',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'نمايش دامنه گزينش شده',
	'PHPSHOP_RB_REPORT_FOR' => 'گزارش براي ',
	'PHPSHOP_RB_DATE' => 'تاريخ',
	'PHPSHOP_RB_ORDERS' => 'سفارشات',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'كل كالاهاي فروخته شده',
	'PHPSHOP_RB_REVENUE' => 'درآمد',
	'PHPSHOP_RB_PRODLIST' => 'ليست كالا'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>