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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Atnaujinti Kuponą',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kodas',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Procentaliai ar Suma',
	'PHPSHOP_COUPON_TYPE' => 'Kupono Tipas',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Dovanų kuponas yra ištrinamas po panaudojimo. Nuolaidų kuponas gali būti naudojamas taip dažnai, kaip klientas nori.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Dovanų Kuponas',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Nuolaidų Kuponas',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Vertė',
	'PHPSHOP_COUPON_PERCENT' => 'Procentas',
	'PHPSHOP_COUPON_TOTAL' => 'Viso'
); $VM_LANG->initModule( 'coupon', $langvars );
?>