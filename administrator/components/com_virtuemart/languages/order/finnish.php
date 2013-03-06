<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @ 2009/01/07 updated by Mauri
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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Maksuloki',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Toimituskulut',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Tilauksen tilan koodi',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Tilauksen tilan nimi',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Lisää/muokkaa tilauksen tilan tiedot',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Tilauksen tilan koodi',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Tilauksen tilan nimi',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Luettelojärjestys',
	'PHPSHOP_COMMENT' => 'Kommentti',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Lähetetäänkö tiedotus muutoksesta asiakkaalle?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Vaihda tilauksen tila ensin!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Lisää tämä kommentti?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Lisäyspäivämäärä',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Asiakkaalle ilmoitettu?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Tilauksen tilan muutos',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Tulosta lomake',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Void lomake',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Seuranta',
	'VM_DOWNLOAD_STATS' => 'Lataustilasto',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'Ei latauksia jäljellä',
	'VM_DOWNLOAD_REENABLE' => 'Aseta lataus uudelleen',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Jäljellä olevat lataukset',
	'VM_DOWNLOAD_RESEND_ID' => 'Lähetä lataus-ID uudelleen',
	'VM_EXPIRY' => 'Vanhenee',
	'VM_UPDATE_STATUS' => 'Päivitä tila',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Anna numeerinen tilauksen numero, ei "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Tilaustietoja ei löytynyt osoitetarra tietokannasta.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Osoitetarraa ei luotu vielä',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} ei saanut osoitetarran kuvia, siksi olemme tässä?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Osoitetarra',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Allekirjoitusta ei jäljitetty ollenkaan',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Seuranta',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-osoite',
	'VM_ORDER_STATUS_ICON_ALT' => 'Tila',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV koodi',
	'VM_ORDER_NOTFOUND' => 'Tilausta ei löydy! Se voi olla poistettu, tai yhteys tietokantaan menetetty. Yrittäkää uudestaan.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Toiminnot',
	'PHPSHOP_ORDER_EDIT' => 'Muokkaa tilauksen kuvausta',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Lisää',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Lisää tuote',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Muokkaa tilausta',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Tuotesaldo on oltava suurempi kuin 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Tuote on lisätty tilaukseen',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Tuote on poistettu tästä tilauksesta',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Varastosaldo on päivitetty',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'takaisin päätuotteeseen',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Valitse tuote',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Muuta laskutusosoite',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Muuta toimitusosoite',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' on muutettu',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Valitse tuotenumero'
); $VM_LANG->initModule( 'order', $langvars );
?>