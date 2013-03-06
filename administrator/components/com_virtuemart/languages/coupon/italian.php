<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Aggiorna Coupon',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Codice',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Valore Percentuale o Assoluto',
	'PHPSHOP_COUPON_TYPE' => 'Tipo di Coupon',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Un Buono Regalo viene eliminato dopo che è stato utilizzato come sconto su un ordine. Un Coupon Permanente può venire utilizzato ogni volta che lo si desidera.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Buono Regalo',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Coupon Permanente',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Valore',
	'PHPSHOP_COUPON_PERCENT' => 'Percentuale',
	'PHPSHOP_COUPON_TOTAL' => 'Assoluto'
); $VM_LANG->initModule( 'coupon', $langvars );
?>
