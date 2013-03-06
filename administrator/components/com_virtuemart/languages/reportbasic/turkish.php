<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : turkish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => '�zel �r�n Listeleme',
	'PHPSHOP_RB_SALE_TITLE' => 'Sat�� Raporlama',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Sat�� Faaliyetleri �zleme',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Aral�k Ayar�',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Ayl�k',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Haftal�k',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'G�nl�k',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Bu Ay',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Son Ay',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Son 60 g�n',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Son 90 g�n',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Ba�lama:',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Bitirme:',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Se�ili de�eri g�ster',
	'PHPSHOP_RB_REPORT_FOR' => 'Raporlama:',
	'PHPSHOP_RB_DATE' => 'Tarih',
	'PHPSHOP_RB_ORDERS' => 'Sipari�ler',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Toplam Sat��lar (Adet)',
	'PHPSHOP_RB_REVENUE' => 'Gelir',
	'PHPSHOP_RB_PRODLIST' => '�r�n Listeleme'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>