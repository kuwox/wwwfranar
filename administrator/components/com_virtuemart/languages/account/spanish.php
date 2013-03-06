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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Cuenta de cliente:',
	'PHPSHOP_ACC_UPD_BILL' => 'Aqu� puede actualizar sus datos de emisi�n de comprobantes.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Aqu� puede agregar y mantener sus direcciones de env�o.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Informaci�n de cuenta',
	'PHPSHOP_ACC_SHIP_INFO' => 'Informaci�n de env�o',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Haga click en el nombre del archivo para descargarlo.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Ya ha descargado el archivo el n�mero m�ximo permitido, o el periodo de descarga ha expirado.'
); $VM_LANG->initModule( 'account', $langvars );
?>