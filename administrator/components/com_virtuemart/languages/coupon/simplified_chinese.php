<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : simplified_chinese.php 1071 2007-12-03 08:42:28Z thepisu $
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
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'PHPSHOP_COUPON_EDIT_HEADER' => '更新优惠卷',
	'PHPSHOP_COUPON_CODE_HEADER' => '优惠卷代码',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => '百分比/数值',
	'PHPSHOP_COUPON_TYPE' => '优惠卷类型',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => '一次性赠券只能在订单中使用一次，永久优惠卷可以反复使用。',
	'PHPSHOP_COUPON_TYPE_GIFT' => '一次性赠券',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => '永久优惠券',
	'PHPSHOP_COUPON_VALUE_HEADER' => '数量',
	'PHPSHOP_COUPON_PERCENT' => '百分比',
	'PHPSHOP_COUPON_TOTAL' => '数值'
); $VM_LANG->initModule( 'Coupon', $langvars );
?>