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
	'PHPSHOP_CARRIER_LIST_LBL' => '承运人列表',
	'PHPSHOP_RATE_LIST_LBL' => '运输费率列表',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => '名称',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => '排序',
	'PHPSHOP_CARRIER_FORM_LBL' => '新增/编辑承运人',
	'PHPSHOP_RATE_FORM_LBL' => '新增/编辑运输费率',
	'PHPSHOP_RATE_FORM_NAME' => '运输费率说明',
	'PHPSHOP_RATE_FORM_CARRIER' => '承运人',
	'PHPSHOP_RATE_FORM_COUNTRY' => '国家',
	'PHPSHOP_RATE_FORM_ZIP_START' => '邮编起始数值',
	'PHPSHOP_RATE_FORM_ZIP_END' => '邮编结束数值',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => '最小重量',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => '最大重量',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => '您的包裹费用',
	'PHPSHOP_RATE_FORM_CURRENCY' => '货币',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => '排序',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => '承运人',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => '运输费率说明',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => '重量从 ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '到 ...',
	'PHPSHOP_CARRIER_FORM_NAME' => '承运人',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => '排序'
); $VM_LANG->initModule( 'shipping', $langvars );
?>