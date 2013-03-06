<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : czech1250.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_VENDOR_LIST_LBL' => 'Prodejci',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Spr�vce',
	'PHPSHOP_VENDOR_FORM_LBL' => 'P�idat �daje',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Kontaktn� �daje',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Logo v pln� velikosti',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Nahr�t logo',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'N�zev obchodu prodejce',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'N�zev firmy prodejce',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_VENDOR_FORM_CITY' => 'M�sto',
	'PHPSHOP_VENDOR_FORM_STATE' => 'St�t/Provincie',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'St�t',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'PS�',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Telefon',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'M�na',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'Kategorie prodejce',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'P��jmen�',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'K�estn� jm�no',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'Prost�edn� jm�no',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Titul',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Fax',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'e-mail',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Cesta k obr�zku',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Popis',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Seznam kategori� prodejc�',
	'PHPSHOP_VENDOR_CAT_NAME' => 'N�zev kategorie',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Popis kategorie',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Prodejci',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'Formul�� kategorie prodejc�',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => '�daje o kategorii',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'N�zev kategorie',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Popis kategorie'
); $VM_LANG->initModule( 'vendor', $langvars );
?>