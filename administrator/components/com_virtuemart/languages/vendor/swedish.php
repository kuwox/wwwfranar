<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version: swedish.php 10:58 2009-07-22
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
	'PHPSHOP_VENDOR_LIST_LBL' => 'Återförsäljare',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Admin',
	'PHPSHOP_VENDOR_FORM_LBL' => 'Ny Information',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Kontaktinformation',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Bild',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Ladda upp bild',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'ÅF Butiksnamn',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'ÅF Företagsnamn',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Adress 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Adress 2',
	'PHPSHOP_VENDOR_FORM_CITY' => 'Ort',
	'PHPSHOP_VENDOR_FORM_STATE' => 'Stat/Provins/Region',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'Land',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'Postnummer',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Telefon',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'ÅF Kategori',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'Efternamn',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'Förnamn',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'Mellannamn',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Titel',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Tele 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Tele 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Fax',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Epost',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Bildmapp',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Beskrivning',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Återförsäljarkategorier',
	'PHPSHOP_VENDOR_CAT_NAME' => 'Kategorinamn',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Kategoribeskrivning',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Återförsäljare',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'ÅF Kategoriformulär',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => 'Kategoriinformation',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'Kategorinamn',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Kategoribeskrivning'
); $VM_LANG->initModule( 'vendor', $langvars );
?>