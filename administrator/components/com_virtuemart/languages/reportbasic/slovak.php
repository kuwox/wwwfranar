<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zablokovaný.' );  
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator drobec drobec@seznam.cz
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Vlastný výpis tovarov',
	'PHPSHOP_RB_SALE_TITLE' => 'Informácia o zľavách', // not used?
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Prehľad aktivít zliav', // not used?
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Nastaviť interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mesačne',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Týždenne',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Denne',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Tento mesiac',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Minulý mesiac',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Ostatných 60 dní',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Ostatných 90 dní',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Začína',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Končí',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Zobraz zvolený rozsah',
	'PHPSHOP_RB_REPORT_FOR' => 'Informácie o',
	'PHPSHOP_RB_DATE' => 'Dátum',
	'PHPSHOP_RB_ORDERS' => 'Objednávky',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Celkom predaných položiek',
	'PHPSHOP_RB_REVENUE' => 'Tržba',
	'PHPSHOP_RB_PRODLIST' => 'Zoznam tovarov'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>