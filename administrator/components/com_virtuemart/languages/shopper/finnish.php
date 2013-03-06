<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @ 2009/01/07 updated by Mauri
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'N�yt� verolliset hinnat?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Valitse n�ytet��nk� asiakkaille hinnat veroineen vai ilman veroa.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Osoite',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Ostajaryhm�t',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Ryhm�n nimi',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Ryhm�n kuvaus',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Lis��/muokkaa ostajaryhm�n tiedot',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Ryhm�n nimi',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Ryhm�n kuvaus',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Perusasiakasryhm�n alennusprosentti (%)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Positiivinen luku X tarkoittaa: (Jos tuotteella ei ole mit��n erikoishintaa t�lle ostajaryhm�lle) perushintaa lasketaan X %:lla. Negatiivinen luku tarkoittaa p�invastaista',
	'SHOPPER_GROUP_MISSING_NAME' => 'Anna ostajaryhm�n nimi.',
	'SHOPPER_GROUP_ALREADY_EXISTS' => 'T�m� ostajaryhm� on jo t�ss� kaupassa.',
	'SHOPPER_GROUP_DELETE_SELECT' => 'Valitse poistettava ostajaryhm�.',
	'SHOPPER_GROUP_DELETE_PAYMENT_METHODS_ASS' => 'T�lle ostajaryhm�lle (Id: {id}) on asetettu viel� maksutapoja!',
	'SHOPPER_GROUP_DELETE_USERS_ASS' => 'T�lle ostajaryhm�lle (Id: {id}) on viel� asetettu k�ytt�ji�!',
	'SHOPPER_GROUP_DELETE_DEFAULT' => 'Ei voida poistaa oletus ostajaryhm��.',
	'SHOPPER_GROUP_ADDED' => 'Ostajaryhm� on lis�tty.',
	'SHOPPER_GROUP_ADD_FAILED' => 'Ostajaryhm�n lis�ys ep�onnistui',
	'SHOPPER_GROUP_UPDATED' => 'Ostajaryhm� on p�ivitetty.',
	'SHOPPER_GROUP_UPDATE_FAILED' => 'Ostajaryhm�n p�ivitys ep�onnistui'
); $VM_LANG->initModule( 'shopper', $langvars );
?>
