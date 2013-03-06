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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista de Transportistas',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista de Taxas de Transporte',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nome',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Lista de Pedidos (número)',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Editar/NovoTransportista',
	'PHPSHOP_RATE_FORM_LBL' => 'Editar/Novo Taxas de Transporte',
	'PHPSHOP_RATE_FORM_NAME' => 'Descripción da Taxa de Transporte',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Transportista',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'País',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Inicio do rango de Códigos Postais',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Fin do rango de Códigos Postais',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Peso mínimo',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Peso máximo',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'A taxa do seu pedido',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Lista de Pedidos (número)',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Transportista',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Descripción da Taxa de Transporte',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Peso a partir de ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... ata',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Empresa do Transportista',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Lista de Pedidos  (número)'
); $VM_LANG->initModule( 'shipping', $langvars );
?>
