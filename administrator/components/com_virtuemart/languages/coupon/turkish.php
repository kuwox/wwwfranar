<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : turkish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Kupon g�ncelle',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kod',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Y�zde veya Toplam',
	'PHPSHOP_COUPON_TYPE' => 'Kupon Tipi',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'E�er hediye kuponu indirim kuponu olarak kullan�l�rsa silinir. Kal�c� kuponu m��teri istedi�i zaman istedi�i gibi kullanabilir.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Hediye kuponu',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Kal�c� kupon',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'De�eri',
	'PHPSHOP_COUPON_PERCENT' => 'Y�zde',
	'PHPSHOP_COUPON_TOTAL' => 'Toplam'
); $VM_LANG->initModule( 'coupon', $langvars );
?>