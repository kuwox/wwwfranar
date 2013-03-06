<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
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
* Translated by Mohammad Hosin Fazeli
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_CARRIER_LIST_LBL' => 'ليست ارسال',
	'PHPSHOP_RATE_LIST_LBL' => 'ليست نرخ ارسال ها',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'نام',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'ليست سفارشات',
	'PHPSHOP_CARRIER_FORM_LBL' => 'ساخت/ويرايش ارسال كننده',
	'PHPSHOP_RATE_FORM_LBL' => 'ساخت / ويرايش نرخ ارسال',
	'PHPSHOP_RATE_FORM_NAME' => 'توضيحات سرعت حمل',
	'PHPSHOP_RATE_FORM_CARRIER' => 'ارسال كننده',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'كشور',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'ZIP range start',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'ZIP range end',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'كمترين وزن',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'بيشترين وزن',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'دستمزد بسته بندي',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'پول',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'ليست سفارش',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'ارسال كننده',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'توضيحات نرخ ارسال',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Weight from ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... به',
	'PHPSHOP_CARRIER_FORM_NAME' => 'شركت ارسال كننده',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'ليست سفارش'
); $VM_LANG->initModule( 'shipping', $langvars );
?>