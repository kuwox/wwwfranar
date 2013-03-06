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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => '显示含税价？',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => '如果选中，则显示含税价。',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => '地址别名',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => '会员组列表',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => '组名',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => '组描述',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => '会员组表单',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => '组名',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => '组描述',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => '在默认会员组价格上打折(百分比)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => '如果一个商品还没有设置属于本会员组的价格，则该商品的本会员组价格为该商品的默认会员组价格的一个折扣。正值意味着价格增加，负值意味着价格减少。'
); $VM_LANG->initModule( 'shopper', $langvars );
?>