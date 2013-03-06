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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => '制造商列表',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => '制造商名称',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => '添加信息',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => '制造商分类',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Email',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => '制造商分类列表',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => '分类名称',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => '分类描述',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => '制造商',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => '制造商分类表单',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => '分类信息',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => '分类名称',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => '分类描述'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>