<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup do '.basename(__FILE__).' nie je povolený.' ); 
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Meno',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Priezvisko',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Stredné meno',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Firma',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_USER_FORM_CITY' => 'Mesto',
	'PHPSHOP_USER_FORM_STATE' => 'Kraj/Provincia/Región',
	'PHPSHOP_USER_FORM_ZIP' => 'PSČ',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Štát',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefón',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobilný telefón',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktívne',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Definovanie spôsobu dodania',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Veľký obrzok',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Nahrať obrázok',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Uložiť meno',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Uložiť meno firmy',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Mesto',
	'PHPSHOP_STORE_FORM_STATE' => 'Kraj/Provincia/Región',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Štát',
	'PHPSHOP_STORE_FORM_ZIP' => 'PSČ',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Mena',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Priezvisko',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Meno',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Stredné meno',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titul',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefón 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefón 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Popis',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Zoznam spôsobov platby',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Názov',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kód',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Skupina zákazníkov',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Spôsob platby',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulár spôsobu platby',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Názov spôsobu platby',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Skupina zákazníkov',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Zľava',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kód',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Triedenie zoznamu',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Spôsob platby',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kreditná karta',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Použiť platobný procesor',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankový prevod',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Len adresa / Platba pri dodaní',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Štatistiky',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Zákazníci',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktívne tovary',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'neaktívne tovary',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nové objednávky',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Noví zákazníci',
	'PHPSHOP_CREDITCARD_NAME' => 'Meno na platobnej karte',
	'PHPSHOP_CREDITCARD_CODE' => 'Platobná karta - krátky kód',
	'PHPSHOP_YOUR_STORE' => 'Tvoj obchod',
	'PHPSHOP_CONTROL_PANEL' => 'Ovládací panel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Zobraziť/Zmeniť Heslo/Transakčný kľúč',
	'PHPSHOP_TYPE_PASSWORD' => 'Zadaj tvoje užívateľské heslo',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Aktuálny transakčný kľúč',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Transakčný kľúč bol úspešne zmenený.',
	'VM_PAYMENT_CLASS_NAME' => 'Názov triedy platby',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(napr. <strong>ps_netbanx</strong>) :<br />
		predvolené: ps_payment<br />
		<em>Zvoľ ps_payment pokiaľ nevieľ čo presne zvoliť!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Ďalšie informácie o platbe',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Zobrazuje sa na stránke s potvrdením objednávky. Môže to byť: kód HTML formulára z poskytovateľov platieb, nápovedy atď.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Akceptované platobné karty',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Pre zmenu zľavy na poplatok napíš sem zápornú hodnotu (napr.: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximálna výška zľavy',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimálna výška zľavy',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form (napr. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Zoznam modulov exportu',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Názov',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Popis',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Zoznam akceptovaných mien',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Tento zoznam definuje všetky meny, ktoré sú akceptované pri nákupoch v obchode. <strong>Poznámka:</strong> Všetky meny, ktoré sú vybraté budú dostupné v pokladni! Pokiaľ chceľ mať len jednu menu, jednoducho si vyber menu tvojho štátu (=predvolená mena).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Názov exportu',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Popis',
	'VM_EXPORT_CLASS_NAME' => 'Názov triedy exportu',
	'VM_EXPORT_CLASS_NAME_TIP' => '(napr. <strong>ps_orders_csv</strong>) :<br /> predvolené: ps_xmlexport<br /> <i>Nechaj prázdne, pokiaľ nevieš, čo sem napísať!</i>',
	'VM_EXPORT_CONFIG' => 'Doplnková konfigurácia exportu',
	'VM_EXPORT_CONFIG_TIP' => 'Definuje nastavenie exportu pre užívateľský export alebo definuje doplnkové nastavenia. Kód musí byť platný PHP kód.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Názov',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Verzia',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formát adresy obchodu',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Môžeš použiť tieto automatické dopĺňače',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formát dátumu v obchode',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Chyba: Nebolo zadané ID spôsobu platby.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Definícia modulu prepravy',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Nemôžem získať triedu {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
