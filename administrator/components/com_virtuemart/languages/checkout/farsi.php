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
* Translated by Mohammad Hosin Fazeli
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_NO_CUSTOMER' => 'مشتري عزيز ، اطلاعات شما در سيستم ثبت نگرديده است. لطفاً اطلاعات  بانكي خود را وارد نماييد. ',
	'PHPSHOP_THANKYOU' => 'از سفارش خريد شما متشكريم.',
	'PHPSHOP_EMAIL_SENDTO' => 'نامه تاييد فرستاده شده است به ',
	'PHPSHOP_CHECKOUT_NEXT' => 'بعدي',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'اطلاعات صورتحساب',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'شركت',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'نام',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'آدرس',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'پست الكترونيكي',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'اطلاعات پستي',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'شركت',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'نام',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'آدرس',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'تلفن',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'فكس',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'روش پرداخت',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'اطلاعات درخواستي هنگاميكه پرداخت از طريق كارت اعتباري انتخاب شده باشد',
	
	'PHPSHOP_PAYPAL_THANKYOU' => 'از پرداخت شما متشكريم. 
        پرداخت با موفقيت انجام پذيرفت. نامه تاييدي از PayPal بدين منظور دريافت خواهيد نمود. اكنون مي توانيد به فعاليت خود در سايت ادامه داده يا براي مشاهده جزئيات پرداخت خود وارد سايت PayPal در
        <a href=http://www.paypal.com>www.paypal.com</a> شويد.',
	'PHPSHOP_PAYPAL_ERROR' => 'در هنگام پردازش پرداخت شما خطايي رخ داد و وضعيت سفارش شما قابل بروز رساني نمي باشد.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'سفارش شما با موفقيت ارسال گرديد !',
	'VM_CHECKOUT_TITLE_TAG' => 'وارسي: مرحله %s از %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'شناسه سفارش تنظيم نشده يا خاليست',
	'VM_CHECKOUT_FAILURE' => 'عدم موفقيت',
	'VM_CHECKOUT_SUCCESS' => 'با موفقيت',
	
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'اين مسير در صفحه وب سايت وجود دارد, و در توسط SSL رمز گذاري شده به نمايش در آمده است.',
	'VM_CHECKOUT_CCV_CODE' => 'كد اعتبار كارت اعتباري',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'كد اعتبار كارت اعتباري شما چيست؟',
	'VM_CHECKOUT_MD5_FAILED' => 'بررسي MD5 با شكست مواجه شد.',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'سفارش يافت نشد.',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'اين خريد پرداخت شده است توسط:  %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
