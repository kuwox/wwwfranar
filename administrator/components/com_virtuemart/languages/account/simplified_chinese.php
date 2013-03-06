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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => '客户帐户：',
	'PHPSHOP_ACC_UPD_BILL' => '您可以在这里更新您的支付信息。',
	'PHPSHOP_ACC_UPD_SHIP' => '您可以在这里增加或修改送货地址。',
	'PHPSHOP_ACC_ACCOUNT_INFO' => '帐户信息',
	'PHPSHOP_ACC_SHIP_INFO' => '送货信息',
	'PHPSHOP_DOWNLOADS_CLICK' => '点击商品名称下载文件。',
	'PHPSHOP_DOWNLOADS_EXPIRED' => '下载的最大次数已到或下载的期限已过。'
); $VM_LANG->initModule( 'account', $langvars );
?>