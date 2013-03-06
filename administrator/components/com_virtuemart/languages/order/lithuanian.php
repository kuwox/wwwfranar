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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Mokėjimų Registras',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Pristatymo Kaina',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Užsakymo Būklės Kodas',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Užsakymo Būklės Pavadinimas',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Užsakymo Būklė',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Užsakymo Būklės Kodas',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Užsakymo Būklės Pavadinimas',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Užsakymų Sąrašas',
	'PHPSHOP_COMMENT' => 'Komentarai',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Perspėti Klientą?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Prašome pirmiau pakeisti Užsakymo Būklę!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Pridėti šį Komentarą?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Įkėlimo data',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Klientas įspėtas?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Užsakymo Būklės Pakeitimas',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Spausdinti Etiketę',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Tuščia etiketė',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Sekti',
	'VM_DOWNLOAD_STATS' => 'PARSISIUNTIMO STATISTIKA',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'neliko parsisiuntimų',
	'VM_DOWNLOAD_REENABLE' => 'Pakartotinai įgalinti Parsisiuntimus',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Likę Parsisiuntimai',
	'VM_DOWNLOAD_RESEND_ID' => 'Pakartotinai išsiųsti Parsisiuntimų ID',
	'VM_EXPIRY' => 'Terminas',
	'VM_UPDATE_STATUS' => 'Atnaujinti Būklę',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Prašome pateikti teisingą, skaitmeninį, Užsakymo ID, ne "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Užsakymo įrašas pristatymo etikečių duombazėje nerastas.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiketė dar neparuošta.',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} cannot get label images, why are we here?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Pristatymo Etiketė',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Parašas nebuvo išgautas',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Sekti',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Tuščia Etiketė',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADDRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'Status Icon',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV Code',
	'VM_ORDER_NOTFOUND' => 'Order not found! It may have been deleted.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Veiksmai',
	'PHPSHOP_ORDER_EDIT' => 'Pakeisti Užsakymo detales',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Pridėti',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Pridėti Prekę',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Pakeisti užsakymą',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Kiekis turi būti didesnis nei 0',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Prekė buvo įkelta į užsakymą',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Prekė buvo pašalinta iš užsakymo',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Kiekis buvo pakeistas',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'grįžti prie prekės',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Pasirinkti Prekę',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Pakeisti Apmokėjimo adresą',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Pakeisti Pristatymo adresą',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => 'buvo pakeistas',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Pasirinkti SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>