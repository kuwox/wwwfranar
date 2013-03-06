<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version : serbian.php 1071 21.12.2008 01:00:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator evil@serbianunderground.com
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
	'CHARSET' => 'utf-8',
	'PHPSHOP_RB_INDIVIDUAL' => 'Izlistavanje individualnih proizvoda',
	'PHPSHOP_RB_SALE_TITLE' => 'Izveštaji o Prodaji',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Pregled prodaje',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mesečno',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Sedmičn',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Dnevno',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Ovaj mesec',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Prošli mesec',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Poslednjih 60 dana',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Poslednji 90 dana',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Od',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Do',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Prikaži odabrani raspon',
	'PHPSHOP_RB_REPORT_FOR' => 'Izveštaj za ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Prudžbine',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Ukupno prodatih artikala',
	'PHPSHOP_RB_REVENUE' => 'Prihod',
	'PHPSHOP_RB_PRODLIST' => 'Lista proizvoda'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>