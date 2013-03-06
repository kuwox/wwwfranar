<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian_formal.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Egy�ni term�klist�k',
	'PHPSHOP_RB_SALE_TITLE' => 'Elad�si jelent�sek',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Elad�si adatok �ttekint�se',
	'PHPSHOP_RB_INTERVAL_TITLE' => '�ll�tsa be az intervallumot',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Havi',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Heti',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Napi',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Ez a h�nap',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'A m�lt h�nap',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Utols� 60 nap',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Utols� 90 nap',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Kezdet',
	'PHPSHOP_RB_END_DATE_TITLE' => 'V�g',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Mutassa a kiv�lasztott tartom�nyt',
	'PHPSHOP_RB_REPORT_FOR' => 'Jelent�s ',
	'PHPSHOP_RB_DATE' => 'D�tum',
	'PHPSHOP_RB_ORDERS' => 'Megrendel�sek',
	'PHPSHOP_RB_TOTAL_ITEMS' => '�ssz. eladott t�telek',
	'PHPSHOP_RB_REVENUE' => 'J�vedelem',
	'PHPSHOP_RB_PRODLIST' => 'Term�k list�z�s'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>