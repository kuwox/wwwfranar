<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : bulgarian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator BULTRANS
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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'История на плащанията',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Цена за доставка',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Код на статуса на поръчката',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Име на статуса на поръчката',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Статус на поръчката',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Код на статуса на поръчката',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Име на статуса на поръчката',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Подреждане',
	'PHPSHOP_COMMENT' => 'Коментар',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Уведомяване на клиент?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Моля, първо сменете статусът на Вашата поръчка!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Добавяне на този коментар?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Датата добавена',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Клиентът е уведомен?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Промяна на статуса на поръчката',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Печат на етикет',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Очисти етикета',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Проследяване',
	'VM_DOWNLOAD_STATS' => 'Сваляния',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'няма останали тегления',
	'VM_DOWNLOAD_REENABLE' => 'Активирай свалянето',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Оставащ брой сваляния',
	'VM_DOWNLOAD_RESEND_ID' => 'Изпрати номер за сваляне',
	'VM_EXPIRY' => 'Изтича',
	'VM_UPDATE_STATUS' => 'Обнови статуса',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Въведете валиден номер, а не "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Няма запис за поръчката в нашата база данни.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Етикетът все още не е генериран',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Класът {ship_class} не може да има етикет, кво праим тук?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Етикет за изпращане',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Подписът не е извлечен',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Проследяване',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Изчисти заглавие',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Етикетът за waybill {tracking_number} беше изчистен.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP адрес',
	'VM_ORDER_STATUS_ICON_ALT' => 'Икона за статус',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV код',
	'VM_ORDER_NOTFOUND' => 'Няма поръчка! Може да е била изтрита.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Действия',
	'PHPSHOP_ORDER_EDIT' => 'Редактирай поръчката',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Добави',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Добави стока',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Промени',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Количеството трябва да бъде по-голямо от 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Стоката беше добавена към вашата поръчка',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Стоката беше изтрита от вашата поръчка',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Количеството беше обновено',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'назад към основния продукт',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Изберете продукт',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Промяна на адреса за фактуриране',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Промяна на адреса за получаване',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' беше променен',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Изберете Инв. Номер'
); $VM_LANG->initModule( 'order', $langvars );
?>
