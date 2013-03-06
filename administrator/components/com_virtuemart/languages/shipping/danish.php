<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : danish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Transport�r liste',
	'PHPSHOP_RATE_LIST_LBL' => 'Tarifliste',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Navn',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'R�kkef�lge',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Opret/rediger transport�r',
	'PHPSHOP_RATE_FORM_LBL' => 'Opret/rediger en forsendelsestarif',
	'PHPSHOP_RATE_FORM_NAME' => 'Forsendelsestarif beskrivelse',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Transport�r',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Postnr. interval start',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Postnr. interval slut',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Laveste v�gt',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'H�jeste v�gt',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Ekspeditionsomkostning',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'R�kkef�lge',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Transport�r',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Forsendelsestarif beskrivelse',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'V�gt fra ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... til',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Transport�r',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'R�kkef�lge'
); $VM_LANG->initModule( 'shipping', $langvars );
?>