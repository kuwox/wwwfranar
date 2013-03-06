<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : brazilian_portuguese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista de transportadores',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista de taxas de transporte',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nome',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Ordem de listagem (n�mero)',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Editar/Criar transportador',
	'PHPSHOP_RATE_FORM_LBL' => 'Editar/Criar taxa de transporte',
	'PHPSHOP_RATE_FORM_NAME' => 'Descri��o',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Transportador',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Pa�s',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'In�cio do intervalo de c�digos postais',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Fim do intervalo de c�digos postais',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Peso minimo',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Peso m�ximo',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'A taxa da sua encomenda',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Ordem de listagem (n�mero)',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Transportador',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Descri��o da taxa de transporte',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Peso a partir de ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... at�',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Empresa transportadora',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Ordem de listagem (n�mero)'
); $VM_LANG->initModule( 'shipping', $langvars );
?>