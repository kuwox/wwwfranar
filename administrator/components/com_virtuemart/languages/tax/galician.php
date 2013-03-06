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
	'PHPSHOP_TAX_LIST_LBL' => 'Lista Tarifas de Imposto',
	'PHPSHOP_TAX_LIST_STATE' => 'Impostos Provinciais ou Rexionais',
	'PHPSHOP_TAX_LIST_COUNTRY' => 'Impostos Estatais',
	'PHPSHOP_TAX_FORM_LBL' => 'Engadir Imposto de Información',
	'PHPSHOP_TAX_FORM_STATE' => 'Impostos Provinciais ou Rexionais',
	'PHPSHOP_TAX_FORM_COUNTRY' => 'Impostos Estatais',
	'PHPSHOP_TAX_FORM_RATE' => 'Tarifas de Imposto'
); $VM_LANG->initModule( 'tax', $langvars );
?>
