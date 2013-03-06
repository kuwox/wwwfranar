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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Kifizetési napló',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Leszállítási ár',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Státuszkód',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Státusz neve',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Új megrendelés státusz',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Státuszkód',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Státusz neve',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Sorrend',
	'PHPSHOP_COMMENT' => 'Megjegyzés',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Ügyfél értesítése?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Előbb módosítsa a megrendelés státuszát!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Befoglaljuk ezt a megjegyzést?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Dátum',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Ügyfél értesítve?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Státusz módosítása',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Nyomtatás',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Void',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Követés',
	'VM_DOWNLOAD_STATS' => 'Letöltési statisztika',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'Nincs több letöltés',
	'VM_DOWNLOAD_REENABLE' => 'Letöltés újraengedélyezése',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Megmaradt letöltések',
	'VM_DOWNLOAD_RESEND_ID' => 'Letöltési ID újraküldése',
	'VM_EXPIRY' => 'Lejárat',
	'VM_UPDATE_STATUS' => 'Módosítás',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Adjon meg valós, numerikus rendelési azonosítót, ne így: "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Rendelés nem található a szállító listáján.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'A tételt még nem hoztuk létre.',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'A {ship_class} class nem tudja betölteni a képeket, miért vagyunk itt?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Szállító cím',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Az aláírás hiányzik.',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Követés',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'A(z) {tracking_number} számú számla fejléce VOID.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-cím',
	'VM_ORDER_STATUS_ICON_ALT' => 'Státusz ikon',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV-kód',
	'VM_ORDER_NOTFOUND' => 'Megrendelés nem található - törölték?',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Opciók',
	'PHPSHOP_ORDER_EDIT' => 'Megrendelés részleteinek módosítása',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Hozzáad',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Termék hozzáadása',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Rendelés módosítása',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Nullánál nagyobb érték szükséges.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Termék hozzáadva',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Termék eltávolítva',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Mennyiség frissítve',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'vissza a szülő termékhez',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Termék kiválasztása',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Számlázási cím módosítása',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Szállítási cím módosítása',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => 'módosítva',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'SKU kiválasztása'
); $VM_LANG->initModule( 'order', $langvars );
?>