<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zablokovaný.' );  
/**
*
* @version $Id: slovak.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Zoznam prepravcov',
	'PHPSHOP_RATE_LIST_LBL' => 'Prehľad cien prepravcov',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Názov',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Triedenie zoznamu',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Upraviť / vytvoriť prepravcu',
	'PHPSHOP_RATE_FORM_LBL' => 'Vytvoriť/Upraviť prepravné',
	'PHPSHOP_RATE_FORM_NAME' => 'Popis prepravného',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Prepravca',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Štát',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Oblasť PSČ',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Koncové PSČ',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Najnižšia hmotnosť',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Najvyššia hmotnosť',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Tvoj poplatok za balík',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Mena',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Triedenie zoznamu',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Prepravca',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Popis prepravného',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Váha od ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... do',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Prepravná spoločnosť',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Triedenie zoznamu'
); $VM_LANG->initModule( 'shipping', $langvars );
?>