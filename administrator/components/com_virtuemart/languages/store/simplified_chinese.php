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
	'PHPSHOP_USER_FORM_FIRST_NAME' => '名',
	'PHPSHOP_USER_FORM_LAST_NAME' => '姓',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => '字号',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => '公司名',
	'PHPSHOP_USER_FORM_ADDRESS_1' => '地址1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => '地址2',
	'PHPSHOP_USER_FORM_CITY' => '城市',
	'PHPSHOP_USER_FORM_STATE' => '省份',
	'PHPSHOP_USER_FORM_ZIP' => '邮编',
	'PHPSHOP_USER_FORM_COUNTRY' => '国家',
	'PHPSHOP_USER_FORM_PHONE' => '电话',
	'PHPSHOP_USER_FORM_PHONE2' => '手机',
	'PHPSHOP_USER_FORM_FAX' => '传真',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => '激活',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => '设置',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => '大图',
	'PHPSHOP_STORE_FORM_UPLOAD' => '上传图片',
	'PHPSHOP_STORE_FORM_STORE_NAME' => '网店名称',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => '网店的公司名称',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => '地址1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => '地址2',
	'PHPSHOP_STORE_FORM_CITY' => '城市',
	'PHPSHOP_STORE_FORM_STATE' => '省份',
	'PHPSHOP_STORE_FORM_COUNTRY' => '国家',
	'PHPSHOP_STORE_FORM_ZIP' => '邮编',
	'PHPSHOP_STORE_FORM_CURRENCY' => '货币',
	'PHPSHOP_STORE_FORM_LAST_NAME' => '名',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => '姓',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => '字号',
	'PHPSHOP_STORE_FORM_TITLE' => '称呼',
	'PHPSHOP_STORE_FORM_PHONE_1' => '电话1',
	'PHPSHOP_STORE_FORM_PHONE_2' => '电话2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => '描述',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => '支付方式列表',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => '名字',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => '代码',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => '会员组',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => '支付方式',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => '支付方式表单',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => '支付方式名称',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => '会员组',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => '折扣',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => '代码',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => '排序',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => '支付方式类型',
	'PHPSHOP_PAYMENT_FORM_CC' => '信用卡',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => '使用支付网关机制',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => '银行汇款',
	'PHPSHOP_PAYMENT_FORM_AO' => '货到付款',
	'PHPSHOP_STATISTIC_STATISTICS' => '统计',
	'PHPSHOP_STATISTIC_CUSTOMERS' => '顾客',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => '畅销商品',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => '滞销商品',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => '新订单',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => '新顾客',
	'PHPSHOP_CREDITCARD_NAME' => '信用卡名称',
	'PHPSHOP_CREDITCARD_CODE' => '信用卡缩略码',
	'PHPSHOP_YOUR_STORE' => '网店',
	'PHPSHOP_CONTROL_PANEL' => '控制面板',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => '显示/更改业务密码',
	'PHPSHOP_TYPE_PASSWORD' => '请输入您的用户密码',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => '当前业务密码',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => '业务密码成功更改。',
	'VM_PAYMENT_CLASS_NAME' => '支付class名称',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(例如：<strong>ps_netbanx</strong>)<br />
默认: ps_payment<br />
<i>如果不确定填什么请选择默认！</i>',
	'VM_PAYMENT_EXTRAINFO' => '支付的相关信息',
	'VM_PAYMENT_EXTRAINFO_TIP' => '显示在订单确认页面，用于提示顾客，可以是支付平台服务商提供的HTML表单代码。',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => '接受的信用卡类型',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => '如果不是折扣而是直接费用，使用负值(例如：<strong>-2.00</strong>)。',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => '最大折扣数量',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => '最小折扣数量',
	'VM_PAYMENT_FORM_FORMBASED' => '基于HTML表单的(例如：PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => '订单导出模块列表',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => '名称',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => '描述',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => '可接受的货币列表',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => '顾客可以任选一个在这里设定的货币进行结算。<strong>注意:</strong> 这里设定的所有货币都可以在结帐时使用！',
	'VM_EXPORT_MODULE_FORM_LBL' => '导出模块表单',
	'VM_EXPORT_MODULE_FORM_NAME' => '导出模块名称',
	'VM_EXPORT_MODULE_FORM_DESC' => '描述',
	'VM_EXPORT_CLASS_NAME' => '导出Class名称',
	'VM_EXPORT_CLASS_NAME_TIP' => '(例如：<strong>ps_orders_csv</strong>)<br /> 默认: ps_xmlexport<br /> <i>如果不确定填什么请留空！</i>',
	'VM_EXPORT_CONFIG' => '导出设置',
	'VM_EXPORT_CONFIG_TIP' => '对用户自定义的导出模块进行设置或增加设置选项。代码必须是合法的PHP代码。',
	'VM_SHIPPING_MODULE_LIST_NAME' => '名称',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => '版本',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => '作者',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => '网店地址格式',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => '您能使用以下替代付',
	'PHPSHOP_STORE_DATE_FORMAT' => '网店日期格式',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => '错误：支付方式ID未提供。',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => '配送模块设置',
	'VM_SHIPPING_MODULE_CLASSERROR' => '不能初始化Class：{shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>