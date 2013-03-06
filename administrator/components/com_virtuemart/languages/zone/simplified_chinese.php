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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => '国家',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => '分配到区域',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => '分配区域',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => '区域名称',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => '区域描述',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => '每件商品的固定运费',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => '每单运费上限',
	'PHPSHOP_ZONE_LIST_LBL' => '区域列表',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => '区域名称',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => '区域描述',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => '每件商品的固定运费',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => '每单运费上限',
	'VM_ZONE_ASSIGN_PERITEM' => '每件商品',
	'VM_ZONE_ASSIGN_LIMIT' => '上限',
	'VM_ZONE_EDITZONE' => '编辑区域'
); $VM_LANG->initModule( 'zone', $langvars );
?>