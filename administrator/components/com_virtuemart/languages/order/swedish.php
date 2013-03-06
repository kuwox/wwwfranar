<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: swedish.php 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators:Stefan Gagner, Mei Ya E-service, http://www.mei-ya.se & Mia Steen, 1st Solution http://www.1solution.se
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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Betalningshistorik',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Fraktpris',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Orderstatuskod',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Orderstatusnamn',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Orderstatus',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Orderstatuskod',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Orderstatusnamn',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Sortering',
	'PHPSHOP_COMMENT' => 'Kommentarer',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Meddela kund?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Var god ändra orderstaus först!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Infoga denna kommentar?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Tillagd datum',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Kunden meddelad?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Ändring Orderstatus',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Utskr etikett',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Försegling',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Spårning',
	'VM_DOWNLOAD_STATS' => 'NEDLADD STAT',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'inga nedladdninagr kvar',
	'VM_DOWNLOAD_REENABLE' => 'Återaktivera nedladdning',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Nedladdningar kvar',
	'VM_DOWNLOAD_RESEND_ID' => 'Skicka Nedladdn-ID på nytt',
	'VM_EXPIRY' => 'Förfaller',
	'VM_UPDATE_STATUS' => 'Uppdateringsstatus',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Ange ett giltigt numeriskt Order-ID, inte "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Orderposten ej funnen i databas för fraktetikett.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiketten ännu ej skapad',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Klassen {ship_class} kan inte erhålla etikettbilder, varför är vi här?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Fraktetikett',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Signaturen ej erhållen',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Spårning',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Försegling',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Etiketten för frakt {tracking_number} har annullerats.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'StatusIcon',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV-Kod',
	'VM_ORDER_NOTFOUND' => 'Kan inte hitta order! Den kan vara borttagen.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Aktiviteter',
	'PHPSHOP_ORDER_EDIT' => 'Ändra orderinformation',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Ny',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Ny Produkt',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Ändra Order',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Antalet måste vara större än 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Produkten har lagts till ordern',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Produkten har tagits bort från ordern',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Antalet har uppdaterats',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'tillbaka till överordnad Produkt',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Välj en Produkt',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Ändra faktureringsadress',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Ändra leveransadress',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' har ändrats',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Välj produktnr'
); $VM_LANG->initModule( 'order', $langvars );
?>