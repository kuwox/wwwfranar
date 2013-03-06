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
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Actualizar cup�n',
	'PHPSHOP_COUPON_CODE_HEADER' => 'C�digo',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Porcentaje total',
	'PHPSHOP_COUPON_TYPE' => 'Tipo de cup�n',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'El cup�n de REGALO se borra despu�s de que fue utilizado para descontar un pedido. El cup�n PERMANENTE se puede utilizar tan a menudo como el cliente desee.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Cup�n de regalo',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Cup�n permamente',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Valor',
	'PHPSHOP_COUPON_PERCENT' => 'Porcentaje',
	'PHPSHOP_COUPON_TOTAL' => 'Total'
); $VM_LANG->initModule( 'coupon', $langvars );
?>