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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Conta de Cliente:',
	'PHPSHOP_ACC_UPD_BILL' => 'Aqui pode encontrar os datos de facturación.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Aqui pode adicionar ou actualizar o lugar para envio.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Información de Conta',
	'PHPSHOP_ACC_SHIP_INFO' => 'Información de Envio',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Clique no nome do produto para efectuar a descarga.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Xa efectuou a descarga a cantidade máxima de veces, ou o periodo para a descarga xa terminou.'
); $VM_LANG->initModule( 'account', $langvars );
?>
