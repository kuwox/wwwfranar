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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Ad�',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Soyad�',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => '�kinci Ad�',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Firma Ad�',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adres 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adres 2',
	'PHPSHOP_USER_FORM_CITY' => '�ehir',
	'PHPSHOP_USER_FORM_STATE' => '�l�e/Semt',
	'PHPSHOP_USER_FORM_ZIP' => 'Posta Kodu',
	'PHPSHOP_USER_FORM_COUNTRY' => '�lke',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobile Phone',
	'PHPSHOP_USER_FORM_FAX' => 'Faks',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktif',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Nakliye Metodu Ayar�',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Tam Resim',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Resim Y�kle',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Ma�aza Ad�',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Ma�aza Firma Ad�',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adres 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adres 2',
	'PHPSHOP_STORE_FORM_CITY' => '�ehir',
	'PHPSHOP_STORE_FORM_STATE' => '�l�e/Semt',
	'PHPSHOP_STORE_FORM_COUNTRY' => '�lke',
	'PHPSHOP_STORE_FORM_ZIP' => 'Posta Kodu',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Kur',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Soyad�',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Ad�',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => '�kinci Ad�',
	'PHPSHOP_STORE_FORM_TITLE' => '�nvan�',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'TEl 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'TEl 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'A��klamalar',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => '�deme Y�ntemi Listesi',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Ad�',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kodu',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Ma�azac� Grubu',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => '�deme Y�ntemi Tipi',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => '�deme Y�ntemi Formu',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => '�deme Form Ad�',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Al�c� Grubu',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => '�ndirim',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Sipari� Listeleme',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => '�deme Y�ntemi Tipi',
	'PHPSHOP_PAYMENT_FORM_CC' => 'KrediKart�',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => '�deme ��lemcisi Kullan�n',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Banka Hesab�',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Sadece adres',
	'PHPSHOP_STATISTIC_STATISTICS' => '�statistikler',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'M��teriler',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktif �r�nler',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'pasif �r�nler',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Yeni Sipari�ler',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Yeni M��teriler',
	'PHPSHOP_CREDITCARD_NAME' => 'Kredi Kart� Ad�',
	'PHPSHOP_CREDITCARD_CODE' => 'Kredi Kart� - G�venlik Kodu',
	'PHPSHOP_YOUR_STORE' => 'Sizin Ma�azan�z',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrol Panel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Muamele Anahtar� �ifresi G�ster/De�i�tir',
	'PHPSHOP_TYPE_PASSWORD' => 'Kullan�c� �ifrenizi Giriniz',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => '�u Anki Muamele Anahtar�',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Muamele Anahtar� Ba�ar� ile de�i�tirildi.',
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
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Name',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Description',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'List of accepted currencies',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Name',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Author',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Store Address Format',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Store Date Format',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: Payment Method ID was not provided.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Shipping Module Configuration',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>