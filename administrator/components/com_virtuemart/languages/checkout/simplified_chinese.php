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
	'PHPSHOP_NO_CUSTOMER' => '您还没有成为会员，请输入您的支付信息。',
	'PHPSHOP_THANKYOU' => '感谢您的订购！',
	'PHPSHOP_EMAIL_SENDTO' => '确认邮件已发往',
	'PHPSHOP_CHECKOUT_NEXT' => '下一个',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => '付款信息',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => '公司',
	'PHPSHOP_CHECKOUT_CONF_NAME' => '姓名',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => '账单地址',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => '送货信息',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => '公司',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => '姓名',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => '送货地址',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => '电话',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => '传真',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => '付款方式',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => '当选用信用卡付款时的必填信息',
	'PHPSHOP_PAYPAL_THANKYOU' => '交易成功，谢谢惠顾！您将会收到发自PayPal的确认邮件。你可以登陆<a href=http://www.paypal.com>www.paypal.com</a>查看交易详情。',
	'PHPSHOP_PAYPAL_ERROR' => '交易处理时发生错误，您的订单状态无法更新。',
	'PHPSHOP_THANKYOU_SUCCESS' => '您已经成功下单！',
	'VM_CHECKOUT_TITLE_TAG' => '结帐: 第%s步（共%s步）',
	'VM_CHECKOUT_ORDERIDNOTSET' => '订单ID没有定义或者为空！',
	'VM_CHECKOUT_FAILURE' => '失败',
	'VM_CHECKOUT_SUCCESS' => '成功',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => '该页是网店自己的网页。',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => '网关在网站执行,并且显示ssl加密的结果。',
	'VM_CHECKOUT_CCV_CODE' => '信用卡验证码',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => '什么是信用卡验证码？',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5检查失败',
	'VM_CHECKOUT_ORDERNOTFOUND' => '未找到订单',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => '支付
由%s<img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">生成'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
