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
	'PHPSHOP_VENDOR_LIST_LBL' => 'Zoznam predajcov',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Admin',
	'PHPSHOP_VENDOR_FORM_LBL' => 'Pridat informáciu',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Kontaktné infomrácie',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Celý obrázok',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Nahrat obrázok',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'Názov obchodu predajcu',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'Názov spolocnosti predajcu',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_VENDOR_FORM_CITY' => 'Mesto',
	'PHPSHOP_VENDOR_FORM_STATE' => 'Štát/Kraj/Oblast',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'Štát',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'PSC',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Telefón',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'Mena',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'Kategória predajcov',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'Priezvisko',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'Meno',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'Stredné meno',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Titul',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Telefón 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Telefón 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Fax',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Email',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Cesta k obrázku',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Popis',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Zoznam kategórií predajcov',
	'PHPSHOP_VENDOR_CAT_NAME' => 'Názov kategórie',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Popis kategórií',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Predajcovia',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'Formulár kategórií predajcov',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => 'Informácie o kategórii',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'Názov kategórie',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Popis kategórie'
); $VM_LANG->initModule( 'vendor', $langvars );
?>