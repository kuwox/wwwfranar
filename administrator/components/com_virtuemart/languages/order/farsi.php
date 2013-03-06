<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
* Translated by Mohammad Hosin Fazeli
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'گزارش پرداخت',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'قيمت حمل و نقل',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'كد وضعيت سفارش',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'نام وضعيت سفارش',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'وضعيت سفارش',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'كد وضعيت سفارش',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'نام وضعيت سفارش',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'ترتيب در ليست',
	'PHPSHOP_COMMENT' => 'نظر',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'مطلع نمودن مشتري؟',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'لطفاً ابتدا وضعيت سفارش را تغيير دهيد !',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'در بر داشتن اين نظر؟',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'تاريخ افزوده شدن',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'به مشتري اطلاع داده شد؟',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'تغيير وضعيت سفارش',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'برچسب چاپيl',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'برچسب بي اعتبار',
	'PHPSHOP_ORDER_LIST_TRACK' => 'رد پا',
	'VM_DOWNLOAD_STATS' => 'حالات دانلود',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'هيج دانلودي باقي نمانده است',
	'VM_DOWNLOAD_REENABLE' => 'دانلود را دوباره فعال كن',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'دانلود هاي باقيمانده',
	'VM_DOWNLOAD_RESEND_ID' => 'فرستاذن مجدد شناسه دانلود',
	'VM_EXPIRY' => 'انقضاء',
	'VM_UPDATE_STATUS' => 'حالات بروز رساني',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Please provide a valid, numeric, Order ID, not "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Order record not found in shipping label database.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'برچسب هنوز توليد نشده است',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} cannot get label images, why are we here?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'برچسب ارسال شد',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'امضا هرگز اصلاح نمي شود',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'تراك',
	'VM_ORDER_LABEL_VOID_TITLE' => 'برچسب باطل شد',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'برچسب بارنامه باطل شد',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP  آدرس',
	'VM_ORDER_STATUS_ICON_ALT' => 'آيكون حالت',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV كد',
	'VM_ORDER_NOTFOUND' => 'سفارش يافت نشد! ممكن است حذف شده باشد',
	
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Actions',
	'PHPSHOP_ORDER_EDIT' => 'تغيير جزئيات سفارش',
	'PHPSHOP_ORDER_EDIT_ADD' => 'افزودن',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'افزودن كالا',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'تغيير سفارش',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'مقدار بايد بزرگتر از 0 باشد.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'اين كالا به سفارش اضافه شد',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'اين كالا از فرم سفارش حذف شد',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'مقدار به روزسازي شد.',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'بازگشت به كالاي رديف بالاتر',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'يك كالا انتخاب كنيد',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'تغيير آدرس ارسال صورتحساب',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'تغيير آدرس ارسال كالا',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' تغيير داده شد.',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'انتخاب واحد'
); $VM_LANG->initModule( 'order', $langvars );
?>
