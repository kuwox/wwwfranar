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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'نام',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'نام خانوادگي',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'نام مياني',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'نام شركت',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'آدرس 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'آدرس 2',
	'PHPSHOP_USER_FORM_CITY' => 'شهر',
	'PHPSHOP_USER_FORM_STATE' => 'استان/ناحيه',
	'PHPSHOP_USER_FORM_ZIP' => 'كد پستي',
	'PHPSHOP_USER_FORM_COUNTRY' => 'كشور',
	'PHPSHOP_USER_FORM_PHONE' => 'تلفن',
	'PHPSHOP_USER_FORM_PHONE2' => 'موبايل',
	'PHPSHOP_USER_FORM_FAX' => 'دور نما',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'فعال',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'تنظيمات نحوه ارسال',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'تصوير كامل',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'آپلود تصوير',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'نام فروشگاه',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'نام شركت فروشگاه',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'آدرس 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'آدرس 2',
	'PHPSHOP_STORE_FORM_CITY' => 'شهر',
	'PHPSHOP_STORE_FORM_STATE' => 'استان/ناحيه',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'كشور',
	'PHPSHOP_STORE_FORM_ZIP' => 'كد پستي',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'پول',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'نام خانوادگي',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'نام',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'نام مياني',
	'PHPSHOP_STORE_FORM_TITLE' => 'عنوان',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'تلفن 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'تلفن 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'توضيحات',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'ليست روشهاي پرداخت',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'نام',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'كد',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'گروه خريدار',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'ليست روشهاي پرداخت',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'فرم روش پرداخت',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'نام روش پرداخت',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'گروه خريدار',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'تخفيف',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'كد',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'ليست سفارش',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'نوع روش پرداخت',
	'PHPSHOP_PAYMENT_FORM_CC' => 'كارت اعتباري',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'بكارگيري پردازشگر پرداخت',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bank debit',
	'PHPSHOP_PAYMENT_FORM_AO' => 'فقط آدرس / پرداخت در ازاي دريافت',
	'PHPSHOP_STATISTIC_STATISTICS' => 'آمار',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'مشتريان',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'محصولات فعال',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'محصولات غير فعال',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'سفارشات جديد',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'مشتريان جديد',
	'PHPSHOP_CREDITCARD_NAME' => 'نام كارت اعتباري',
	'PHPSHOP_CREDITCARD_CODE' => 'كارت اعتباري - كد كوتاه',
	'PHPSHOP_YOUR_STORE' => 'فروشگاه شما',
	'PHPSHOP_CONTROL_PANEL' => 'پانل كنترل',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'نمايش/تغيير كليد رمز/تراكنش',
	'PHPSHOP_TYPE_PASSWORD' => 'لطفا كلمه رمز خود را تايپ نماييد',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'كليد تراكنش جاري',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'كليد تراكنش با موفقيت تغيير يافت',
	'VM_PAYMENT_CLASS_NAME' => 'نام كلاس پرداخت',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
		default: ps_payment<br />
		<em>Choose ps_payment if you\'re not sure what to choose!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'اطلاعات اضافي پرداخت',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'انواع كارت هاي اعتباري قابل قبول',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'تغيير تخفيف به قيمت, مقدار منفي بكار ببريد (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'بيشترين تخفيف',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'كمترين تخفيف',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'ليست ماژول خروجي',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'نام',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'توضيحات',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'ليست واحد هاي پولي',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'فرم ماژول خروجي',
	'VM_EXPORT_MODULE_FORM_NAME' => 'نام ماژو لخروجي',
	'VM_EXPORT_MODULE_FORM_DESC' => 'توضيحات',
	'VM_EXPORT_CLASS_NAME' => 'نام كلاس خروجي',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'تنظيمات اضافي خروجي',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'نام',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'نسخه',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'نويسنده',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'فرمت آدرس فروشگاه',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'فرمت تاريخ فروشگاه',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'خطا : شناسه روش پرداخت آماده نشده است',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'تنظيمات ماژول ارسال',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
