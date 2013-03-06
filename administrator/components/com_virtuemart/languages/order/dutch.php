<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @dutch translation by JoomlaCommunity (email: taal@joomlacommunity.eu)
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
        'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Betaalgegevens',
        'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Verzendkosten',
        'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Orderstatus code',
        'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Orderstatus naam',
        'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Orderstatus',
        'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Orderstatus code',
        'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Orderstatus naam',
        'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Sorteervolgorde',
        'PHPSHOP_COMMENT' => 'Commentaar',
        'PHPSHOP_ORDER_LIST_NOTIFY' => 'Klant informeren?',
        'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Wijzig eerst de status van de bestelling!',
        'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Commentaar toevoegen?',
        'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Toegevoegd op datum',
        'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Klant geïnformeerd?',
        'PHPSHOP_ORDER_STATUS_CHANGE' => 'Orderstatus wijziging',
        'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Print label',
        'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Ongeldig label',
        'PHPSHOP_ORDER_LIST_TRACK' => 'Traceren',
        'VM_DOWNLOAD_STATS' => 'DOWNLOAD STATISTIEKEN',
        'VM_DOWNLOAD_NOTHING_LEFT' => 'Geen overgebleven downloads',
        'VM_DOWNLOAD_REENABLE' => 'Maak download opnieuw mogelijk',
        'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Overgebleven downloads',
        'VM_DOWNLOAD_RESEND_ID' => 'Verstuur download ID opnieuw',
        'VM_EXPIRY' => 'Verlopen',
        'VM_UPDATE_STATUS' => 'Update status',
        'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Vul alstublieft een geldig, numeriek, Order ID, niet "{order_id}" in',
        'VM_ORDER_LABEL_NOTFOUND' => 'Bestelling niet gevonden in shipping label database.',
        'VM_ORDER_LABEL_NEVERGENERATED' => 'Label is nog niet gegenereerd',
        'VM_ORDER_LABEL_CLASSCANNOT' => 'Klasse {ship_class} kan geen label afbeeldingen verkrijgen, waarom zijn we hier?',
        'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Verzendlabel',
        'VM_ORDER_LABEL_SIGNATURENEVER' => 'Handtekening is niet opgevraagd',
        'VM_ORDER_LABEL_TRACK_TITLE' => 'Traceren',
        'VM_ORDER_LABEL_VOID_TITLE' => 'Geldigheidslabel',
        'VM_ORDER_LABEL_VOIDED_MSG' => 'Label voor waybill {tracking_number} is ongeldig gemaakt.',
        'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-Adres',
        'VM_ORDER_STATUS_ICON_ALT' => 'Status icoon',
        'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV Code',
        'VM_ORDER_NOTFOUND' => 'Bestelling niet gevonden! Deze kan verwijderd zijn.',
        'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Acties',
        'PHPSHOP_ORDER_EDIT' => 'Change Order Details',
        'PHPSHOP_ORDER_EDIT_ADD' => 'Toevoegen',
        'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Voeg product toe',
        'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Aanpassen order',
        'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Aantal moet groter zijn dan 0.',
        'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Het product is toegevoegd aan de order',
        'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Het product is verwijderd uit de order',
        'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Aantal is aangepast',
        'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'terug naar het hoofdproduct',
        'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Selecteer een product',
        'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Verander faktuuradres',
        'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Verander verzendadres',
        'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' is aangepast',
        'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Selecteer artikelnummer'
); $VM_LANG->initModule( 'order', $langvars );
?>
