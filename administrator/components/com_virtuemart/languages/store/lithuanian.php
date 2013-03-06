<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Vardas',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Pavardė',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Antras Vardas',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Įmonės pavadinimas',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresas 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresas 2',
	'PHPSHOP_USER_FORM_CITY' => 'Miestas',
	'PHPSHOP_USER_FORM_STATE' => 'Rajonas',
	'PHPSHOP_USER_FORM_ZIP' => 'Pašto kodas',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Šalis',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefono Nr.',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mob. Tel. Nr.',
	'PHPSHOP_USER_FORM_FAX' => 'Fakso Nr.',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Active',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Pasirinkti siuntimo būdą',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Visas paveikslėlis',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Įkelti paveikslėlį',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Parduotuvės pavadinimas',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Parduotuvės Įmonės pavadinimas',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresas 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresas 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Miestas',
	'PHPSHOP_STORE_FORM_STATE' => 'Rajonas',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Šalis',
	'PHPSHOP_STORE_FORM_ZIP' => 'Pašto kodas',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valiuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Pavardė',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Vardas',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Antras vardas',
	'PHPSHOP_STORE_FORM_TITLE' => 'Title',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefono 1 Nr.',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefono 2 Nr.',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Aprašymas',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Apmokėjimo būdų sąrašas',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Pavadinimas',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kodas',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Pirkėjų grupė',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Apmokėjimo būdo tipas',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Apmokėjimo būdo forma',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Apmokėjimo būdo Pavadinimas',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Pirkėjų grupė',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Nuolaida',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kodas',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Rikiavimo tvarka',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Apmokėjimo būdo tipas',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kreditine Kortele',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Use Payment Processor',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Banko pavedimas',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Apmokėjimas atsiimant',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistika',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Klientai',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktyvios Prekės',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'neaktyvios Prekės',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nauji Užsakymai',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nauji Klientai',
	'PHPSHOP_CREDITCARD_NAME' => 'Kreditinės Kortelės Pavadinimas',
	'PHPSHOP_CREDITCARD_CODE' => 'Kreditinės Kortelės - Trumpas Kodas',
	'PHPSHOP_YOUR_STORE' => 'Jūsų parduotuvė',
	'PHPSHOP_CONTROL_PANEL' => 'Valdymo Pultas',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Rodyti/Keisti Slaptažodį/Operacijos raktą',
	'PHPSHOP_TYPE_PASSWORD' => 'Prašome įvesti slaptažodį',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Einamosios Operacijos raktas',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Operacijos raktas buvo sėkmingai pakeistas',
	'VM_PAYMENT_CLASS_NAME' => 'Apmokėjimo rūšies pavadinimas',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
		default: ps_payment<br />
		<em>Choose ps_payment if you\'re not sure what to choose!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Payment Extra Info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Aptarnaujamos šios kreditinės kortelės',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maksimali nuolaida',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimali nuolaida',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Pavadinimas',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Apibūdinimas',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Priimamų valiutų sąrašas',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Apibūdinimas',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Pavadinimas',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versija',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autorius',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Parduotuvės adreso formatas',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Parduotuvės datos formatas',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Klaida: Nepateiktas Apmokėjimo Būdo ID',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Siuntimo modulio konfiguracija',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>