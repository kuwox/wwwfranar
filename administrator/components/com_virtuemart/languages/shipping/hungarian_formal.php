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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Sz�ll�t� lista',
	'PHPSHOP_RATE_LIST_LBL' => 'Sz�ll�t�si d�jt�tel lista',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'N�v',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'List�z�si sorrend',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Sz�ll�t� m�dos�t�sa/l�trehoz�sa',
	'PHPSHOP_RATE_FORM_LBL' => 'Sz�ll�t�si d�jt�telt l�trehoz/szerkeszt',
	'PHPSHOP_RATE_FORM_NAME' => 'Sz�ll�t�si d�jt�tel le�r�s',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Sz�ll�t�',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Orsz�g',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Ir�ny�t�sz�m sorozat kezdete',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Ir�ny�t�sz�m sorozat v�ge',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Legkisebb s�ly',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Legnagyobb s�ly',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'A csomagja illet�ke',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'P�nznem',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Megrendel�s list�z�s',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Sz�ll�t�',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Sz�ll�t�si d�jt�tel le�r�s',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'S�ly  ...-t�l',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... ig',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Sz�ll�t� c�g',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'List�z�si sorrend'
); $VM_LANG->initModule( 'shipping', $langvars );
?>