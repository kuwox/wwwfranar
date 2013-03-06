<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'PHPSHOP_RB_INDIVIDUAL' => 'Individual Product Listings',
	'PHPSHOP_RB_SALE_TITLE' => 'Pardavimų ataskaitos',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Pardavimų aktyvumo peržiūra',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Nurodyti Intervalą',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mėnesinis',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Savaitinis',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Dieninis',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Šį Mėnesį',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Praėjusį mėnesį',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Per paskutines 60 dienų',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Per paskutines 90 dienų',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Pradėti nuo',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Baigti',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Rodyti šį pasirinktą intervalą',
	'PHPSHOP_RB_REPORT_FOR' => 'Ataskaita už',
	'PHPSHOP_RB_DATE' => 'Data',
	'PHPSHOP_RB_ORDERS' => 'Užsakymai',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Viso parduota vienetų',
	'PHPSHOP_RB_REVENUE' => 'Pajamos',
	'PHPSHOP_RB_PRODLIST' => 'Prekių sąrašas'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>