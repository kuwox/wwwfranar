<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version: swedish.php 10:56 2009-07-22
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Förnamn',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Efternamn',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Mellannamn',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Företagsnamn',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adress 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adress 2',
	'PHPSHOP_USER_FORM_CITY' => 'Ort',
	'PHPSHOP_USER_FORM_STATE' => 'Stat/Provins/Region',
	'PHPSHOP_USER_FORM_ZIP' => 'Postnummer',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Land',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobil',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktiv',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Inställning leveransmetod',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Bild',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Ladda upp bild',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Butiksnamn',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Butikens företagsnamn',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adress 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adress 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Ort',
	'PHPSHOP_STORE_FORM_STATE' => 'Stat/Provins/Region',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_STORE_FORM_ZIP' => 'Postnummer',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Efternamn',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Förnamn',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Mellannamn',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titel',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Beskrivning',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Betalningsmetoder',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Namn',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Kundgrupp',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Betalningsmetodtyp',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulär Betalningsmetod',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Namn Betalningsmetod',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Kundgrupp',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Rabatt',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Sortering',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Betalningsmetodtyp',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kreditkort',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Använd betalningsprocessor',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankdebitering',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Endast adress / Postförskott',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistik',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Kunder',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktiva Produkter',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'inaktiva Produkter',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nya Ordrar',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nya Kunder',
	'PHPSHOP_CREDITCARD_NAME' => 'Krditkortsnamn',
	'PHPSHOP_CREDITCARD_CODE' => 'Kreditkort - Kortkod',
	'PHPSHOP_YOUR_STORE' => 'Din Butik',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrollpanel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Visa/Ändra Lösenord/Transaktionsnyckel',
	'PHPSHOP_TYPE_PASSWORD' => 'Ange ditt lösenord',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Aktuell Transaktionsnyckel',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Tranaktionsnyckeln är ändrad.',
	'VM_PAYMENT_CLASS_NAME' => 'Betalningsklassens namn',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(ex. <strong>ps_netbanx</strong>) :<br />
		default: ps_payment<br />
		<em>Välj ps_payment om du inte vet vaddu skall välja!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Extra Betalningsinformation',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Visas på sidan med orderbekräftelsen. Kan vara: HTML Form Code från din Betalningsleverantör, Tips till kunden etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepterade Kreditkort',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'För att ändra rabbaten till en kostnad kan du använda negativa värden här (Exempel: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximalt rabattvärde',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minsta rabattvärde',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form baserad (ex. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Exportmoduler',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Namn',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Beskrivning',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Accepterade vautor',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Denna lista definierar alla valutor som accepteras vid betalning i denna butik. <strong>OBS!:</strong> Alla valutor som väljs här kan användas vid utcheckningen! Om du inte vill det så väl ditt lands valuta (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Formlär Exportmodul',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Exportmodulnamn',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Beskrivning',
	'VM_EXPORT_CLASS_NAME' => 'ExportKlassnamn',
	'VM_EXPORT_CLASS_NAME_TIP' => '(ex. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Lämna tomt om du inte vet vad som skall fyllas i!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra inställningar',
	'VM_EXPORT_CONFIG_TIP' => 'Skapa Exportinställningar för användardefinerade exportmoduler eller ange extra inställningar. Koden måste vara gilitig PHP-kod.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Namn',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Författare',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Butikens adressformat',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Du kan använda följande platshållare här',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Butikens datumformat',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'FEL!: Betalningsmetodens ID inte angiven.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Inställningar Fraktmodul',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Kunde inte instantiera Klassen {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
