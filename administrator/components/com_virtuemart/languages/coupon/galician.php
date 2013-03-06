<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator Miguel Pan Fidalgo
* @mail panfidalgo@gmail.com
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Actualizar Cupón',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Código',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Porcentaxe ou Total',
	'PHPSHOP_COUPON_TYPE' => 'Tipo de Cupón',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Un Cupón de Ofertá é eliminado despois de ser utilizado nunha compra. Un Cupón Permanente pode ser utilizado tan cantas veces o cliente quixera.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Cupón de Oferta',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Cupón Permanente',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Valor',
	'PHPSHOP_COUPON_PERCENT' => 'Porcentaxe',
	'PHPSHOP_COUPON_TOTAL' => 'Total'
); $VM_LANG->initModule( 'coupon', $langvars );
?>
