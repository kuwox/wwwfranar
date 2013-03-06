<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version : serbian.php 1071 21.12.2008 01:00:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator evil@serbianunderground.com
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Ime',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Prezime',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Srednje ime',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Naziv preduzeća',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_USER_FORM_CITY' => 'Grad',
	'PHPSHOP_USER_FORM_STATE' => 'State',
	'PHPSHOP_USER_FORM_ZIP' => 'Poštanski broj',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Država',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobilni',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktivno',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Konfiguracija načina dostave',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Slika',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Upload Slike',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Ime Web Prodavnice',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Naziv Matičnog Preduzeća',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Grad',
	'PHPSHOP_STORE_FORM_STATE' => 'State',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Država',
	'PHPSHOP_STORE_FORM_ZIP' => 'Poštanski broj',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Prezime',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Ime',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Srednje ime',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titula',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefon',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Mobilni',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Opis',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista Načina Plaćanja',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Naziv',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grupa Kupaca',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Tip Načina Plaćanja',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Forma Načina Plaćanja',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Naziv Načina Plaćanja',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grupa kupaca',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Popust',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Redosled',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Tip Načina Plaćanja',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kreditna Kartica',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Koristi procesor plaćanja',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Debit',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Samo adresa / Plaćanje po dostavi',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistika',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Kupci',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktivni Proizvodi',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'neaktivni Proizvodi',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nove Poarudžbine',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Novi Kupci',
	'PHPSHOP_CREDITCARD_NAME' => 'Naziv kreditne kartice',
	'PHPSHOP_CREDITCARD_CODE' => 'Kreditna kartica - Kratki kod',
	'PHPSHOP_YOUR_STORE' => 'Vaša Prodavnica',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrolna Tabla',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Prikaži/Promeni šifru transakcije',
	'PHPSHOP_TYPE_PASSWORD' => 'Upišite svoju šifru',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Trenutna šifra transakcije',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Šifra transakcije je uspešno promenjena.',
	'VM_PAYMENT_CLASS_NAME' => 'Payment class name',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Payment Extra Info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepted Credit Card Types',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximum discount amount',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum discount amount',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Naziv',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Opis',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lista Valuta',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Ova lista definira koje valute želite prihvatiti pri kupovini u vašoj prodavnici. <strong>Napomena:</strong> Sve ovde odabrane valute će se koristiti u postupnku naplate. Ako to ne želite, odaberite samo valutu svoje zemlje (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Opis',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Naziv',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Verzija',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Format Adrese',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Ovde možete koristiti sledeće tagove',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Format Datuma',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Greška: Nije naveden ID načina plaćanja.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Konfiguracija Dostavnog Modula',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>