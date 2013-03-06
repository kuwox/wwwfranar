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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => '付款记录',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => '配送费用',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => '订单状态代码',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => '订单状态名称',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => '订单状态',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => '订单状态代码',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => '订单状态名称',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => '订单列表',
	'PHPSHOP_COMMENT' => '评论',
	'PHPSHOP_ORDER_LIST_NOTIFY' => '通知顾客？',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => '请先改变订单状态！',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => '包括此评论？',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => '订单日期',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => '顾客通知？',
	'PHPSHOP_ORDER_STATUS_CHANGE' => '订单状态更改',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => '打印标签',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => '空标签',
	'PHPSHOP_ORDER_LIST_TRACK' => '跟踪',
	'VM_DOWNLOAD_STATS' => '下载状态',
	'VM_DOWNLOAD_NOTHING_LEFT' => '不可再下载',
	'VM_DOWNLOAD_REENABLE' => '重启下载',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => '剩余下载次数',
	'VM_DOWNLOAD_RESEND_ID' => '再次发送下载ID',
	'VM_EXPIRY' => '到期',
	'VM_UPDATE_STATUS' => '状态更新',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => '请输入一个合法的数字的订单ID,"{order_id}"不行',
	'VM_ORDER_LABEL_NOTFOUND' => '该订单在出货标签表中没有记录',
	'VM_ORDER_LABEL_NEVERGENERATED' => '出货标签没有生成',
	'VM_ORDER_LABEL_CLASSCANNOT' => '类{ship_class}不能获取标签图像。',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => '出货标签',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Signature was never retrieved',
	'VM_ORDER_LABEL_TRACK_TITLE' => '跟踪',
	'VM_ORDER_LABEL_VOID_TITLE' => '无效标签',
	'VM_ORDER_LABEL_VOIDED_MSG' => '货运单标签{tracking_number}已无效',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP地址',
	'VM_ORDER_STATUS_ICON_ALT' => '状态图标',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV代码',
	'VM_ORDER_NOTFOUND' => '订单未找到！可能已被删除。',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => '操作',
	'PHPSHOP_ORDER_EDIT' => '编辑订单',
	'PHPSHOP_ORDER_EDIT_ADD' => '增加',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => '增加商品',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => '改变订单',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => '数量必须大于0。',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => '该商品已被加入到订单中',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => '该商品已从订单中移除',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => '数量已经更新',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => '回到父商品',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => '选择一个商品',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => '修改账单地址',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => '修改送货地址',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => '订单已经被改变',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => '选择型号'
); $VM_LANG->initModule( 'order', $langvars );
?>