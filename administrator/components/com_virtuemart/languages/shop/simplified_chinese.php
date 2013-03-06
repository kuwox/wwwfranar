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
	'PHPSHOP_BROWSE_LBL' => '浏览',
	'PHPSHOP_FLYPAGE_LBL' => '商品详情',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => '编辑商品',
	'PHPSHOP_DOWNLOADS_START' => '开始下载',
	'PHPSHOP_DOWNLOADS_INFO' => '请输入您在EMAIL中收到的下载ID并点击“开始下载”。',
	'PHPSHOP_WAITING_LIST_MESSAGE' => '请输入您的Email，如果产品有库存时将会通知您。 
                                        我们保证不会散布或出售您的Email，也不会将此Email用于任何其它目的。<br /><br />谢谢！',
	'PHPSHOP_WAITING_LIST_THANKS' => '感谢您的预定！ <br />有货时我们会尽快通知您。',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => '提醒我',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => '搜索所有分类',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => '搜索所有商品信息',
	'PHPSHOP_SEARCH_PRODNAME' => '只搜索商品名称',
	'PHPSHOP_SEARCH_MANU_VENDOR' => '只搜索制造商/商户',
	'PHPSHOP_SEARCH_DESCRIPTION' => '只搜索商品描述',
	'PHPSHOP_SEARCH_AND' => '与',
	'PHPSHOP_SEARCH_NOT' => '非',
	'PHPSHOP_SEARCH_TEXT1' => '第一个下拉框可以让您选择商品分类以缩小搜索范围， 
        第二个下拉框可以将您的搜索范围限制在特定的商品信息 (比如商品名称)。下拉框不选，则搜索全部。',
	'PHPSHOP_SEARCH_TEXT2' => '您可以输入两个搜索关键词，并设置“与”或“非”。
        选择“与”意味着同时满足两者的商品都将出现在搜索结果之中。
        而选择“非”则意味着满足前者但不满足后者的商品将出现在搜索结果之中。',
	'PHPSHOP_CONTINUE_SHOPPING' => '继续购物',
	'PHPSHOP_AVAILABLE_IMAGES' => '图片',
	'PHPSHOP_BACK_TO_DETAILS' => '返回商品详情',
	'PHPSHOP_IMAGE_NOT_FOUND' => '图片未找到！',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => '您想根据参数检索商品吗？<BR>有以下选择：',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => '很遗憾，没有对应的商品类型。',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => '很遗憾，没有于此参数对应的商品类型。',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => '象',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => '不象',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => '全文搜索',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => '全选',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => '任选',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => '重设',
	'PHPSHOP_PRODUCT_NOT_FOUND' => '很遗憾，没有搜索结果。',
	'PHPSHOP_PRODUCT_PACKAGING1' => '每包数量({单位}):',
	'PHPSHOP_PRODUCT_PACKAGING2' => '每箱数量({单位}):',
	'PHPSHOP_CART_PRICE_PER_UNIT' => '每单位价格',
	'VM_PRODUCT_ENQUIRY_LBL' => '咨询该商品',
	'VM_RECOMMEND_FORM_LBL' => '推荐给朋友',
	'PHPSHOP_EMPTY_YOUR_CART' => '购物车为空',
	'VM_RETURN_TO_PRODUCT' => '返回到商品',
	'EMPTY_CATEGORY' => '分类当前为空。',
	'ENQUIRY' => '询问',
	'NAME_PROMPT' => '输入您的姓名',
	'EMAIL_PROMPT' => 'E-mail地址',
	'MESSAGE_PROMPT' => '输入正文',
	'SEND_BUTTON' => '发送',
	'THANK_MESSAGE' => '感谢垂询，我们将尽快联系您！',
	'PROMPT_CLOSE' => '关闭',
	'VM_RECOVER_CART_REPLACE' => '用已保存的购物车内容替换当前购物车内容',
	'VM_RECOVER_CART_MERGE' => '把已保存的购物车内容增加到当前购物车中',
	'VM_RECOVER_CART_DELETE' => '删除已保存的购物车',
	'VM_EMPTY_YOUR_CART_TIP' => '清除购物车中所有商品',
	'VM_SAVED_CART_TITLE' => '已保存的购物车',
	'VM_SAVED_CART_RETURN' => '返回'
); $VM_LANG->initModule( 'shop', $langvars );
?>
