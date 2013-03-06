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
	'PHPSHOP_NO_CUSTOMER' => '您還沒有註冊成為會員。請提供您的支付資訊。',
	'PHPSHOP_THANKYOU' => '感謝您的訂購.',
	'PHPSHOP_EMAIL_SENDTO' => '一封確認郵件已寄往',
	'PHPSHOP_CHECKOUT_NEXT' => '下一個',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => '付款資訊',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => '公司',
	'PHPSHOP_CHECKOUT_CONF_NAME' => '姓名',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => '地址',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => '送貨資訊',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => '公司',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => '姓名',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => '地址',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => '電話',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => '傳真',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => '付款方式',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => '當選用信用卡付款時的必填資訊',
	'PHPSHOP_PAYPAL_THANKYOU' => '感謝您的付款.
        本交易已完成，您將會收到由 paypal 所發出的本次交易確認 email.
        您可以繼續或是馬上登入 <a href=http://www.paypal.com>www.paypal.com</a> 來確認交易細目.',
        'PHPSHOP_PAYPAL_ERROR' => '處理交易時發生錯誤，你的訂單狀態無法更新.',
	'PHPSHOP_THANKYOU_SUCCESS' => '您的訂單已經成功',
	'VM_CHECKOUT_TITLE_TAG' => 'Checkout: Step %s of %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Order ID is not set or emtpy!',
	'VM_CHECKOUT_FAILURE' => 'Failure',
	'VM_CHECKOUT_SUCCESS' => 'Success',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Order not found',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>