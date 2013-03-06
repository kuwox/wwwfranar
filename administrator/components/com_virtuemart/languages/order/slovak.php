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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Log platby',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Cena za prepravu',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Kód stavu objednávky',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Názov stavu objednávky',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Stav objednávky',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Kód stavu objednávky',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Stav objednávky',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Triedenie zoznamu',
	'PHPSHOP_COMMENT' => 'Komentár',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Upozorniť zákazníka?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Najprv zmeň spôsob triedenia!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Vrátane tohto komentára?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Dátum bol pridaný',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Upozorniť zákazníka?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Zmeniť stav objednávky',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Vytlačiť menovku',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Zrušiť menovku?',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Cesta',
	'VM_DOWNLOAD_STATS' => 'ŠTATISTIKY SŤAHOVANIA',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'neostávajú žiadne stiahnutia',
	'VM_DOWNLOAD_REENABLE' => 'Znova zapnúť stiahnutie',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Zostávajúce stiahnutia',
	'VM_DOWNLOAD_RESEND_ID' => 'Znova poslať ID stiahnutia',
	'VM_EXPIRY' => 'Expirácia',
	'VM_UPDATE_STATUS' => 'Stav aktualizácie',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Zadaj platné, číselné ID objednávky, nie "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Záznam s objednávkou nebol nájdený v našej databáze prepravných menoviek.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Menovka ešte nebola vygenerovaná',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Trieda {ship_class} nemôže získať obrázky menoviek, kdeže sú?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Prepravná menovka',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Podpis nebol nikdy získaný',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Cesta',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Zrušiť menovku',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Menovka pre nákladný list {tracking_number} bola zrušená.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADDRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'Ikona stavu',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV kód',
	'VM_ORDER_NOTFOUND' => 'Objednávka nebola nájdená! Mohla byť vymazaná.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Možnosti',
	'PHPSHOP_ORDER_EDIT' => 'Zmeniť detaily objednávky',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Pridať',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Pridať tovar',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Zmeniť objednávku',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Množstvo musí byť väčšie ako 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Tovar bol pridaný na objednávku',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Tovar bol z objednávky odstránený',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Množstvo bolo aktualizované',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'späť na rodičovský tovar',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Vyber tovar',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Zmeniť fakturačnú adresu',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Zmeniť dodaciu adresu',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' bola zmenená',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Zvoľ SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
