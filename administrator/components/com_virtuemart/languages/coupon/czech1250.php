<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : czech1250.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Upravit slevov� kup�n',
	'PHPSHOP_COUPON_CODE_HEADER' => 'K�d',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Procenta nebo ��stka',
	'PHPSHOP_COUPON_TYPE' => 'Typ kup�nu',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Jednor�zov� kup�n je vymaz�n po pou�it� a p�izn�n� slevy. Trval� kup�n m��e b�t pou��v�n neomezen�.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Jednor�zov� kup�n',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Trval� kup�n',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Hodnota',
	'PHPSHOP_COUPON_PERCENT' => 'Procenta',
	'PHPSHOP_COUPON_TOTAL' => '��stka'
); $VM_LANG->initModule( 'coupon', $langvars );
?>