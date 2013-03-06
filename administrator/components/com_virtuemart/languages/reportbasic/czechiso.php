<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : czechiso.php 1071 2007-12-03 08:42:28Z thepisu $
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
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_RB_INDIVIDUAL' => 'Individu�ln� v�pis zbo��',
	'PHPSHOP_RB_SALE_TITLE' => 'Sestavy prodeje',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'P�ehled prodeje',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Nastavit interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'M�s��n�',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'T�denn�',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Denn�',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Tento m�s�c',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Minul� m�s�c',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Posledn�ch 60 dn�',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Posledn�ch 90 dn�',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Za��tek',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Konec',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Zobrazit vybran� obdob� ',
	'PHPSHOP_RB_REPORT_FOR' => 'Sestava pro ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Objedn�vky',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Celkem prod�no polo�ek',
	'PHPSHOP_RB_REVENUE' => 'Tr�ba',
	'PHPSHOP_RB_PRODLIST' => 'V�pis zbo��'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>