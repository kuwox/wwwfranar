<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version: swedish.php 10:51 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya E-service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Översikt per Produkt',
	'PHPSHOP_RB_SALE_TITLE' => 'Försäljningsrapport', // not used?
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Översikt Försäljningsaktiviteter', // not used?
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Intervall',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Per månad',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Per vecka',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Per dag',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Denna månad',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Senaste månad',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Senaste 60 dagarna',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Senaste 90 dagarna',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Startdatum',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Slutdatum',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Visa denna period',
	'PHPSHOP_RB_REPORT_FOR' => 'Rapport för ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Ordrar',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Antal sålda artiklar',
	'PHPSHOP_RB_REVENUE' => 'Förtjänst',
	'PHPSHOP_RB_PRODLIST' => 'Produkter'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>