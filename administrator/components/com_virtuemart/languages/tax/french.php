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
	'PHPSHOP_TAX_LIST_LBL' => 'Liste des taux de TVA',
	'PHPSHOP_TAX_LIST_STATE' => 'TVA état / région',
	'PHPSHOP_TAX_LIST_COUNTRY' => 'TVA  pays',
	'PHPSHOP_TAX_FORM_LBL' => 'Ajouter des informations sur la TVA',
	'PHPSHOP_TAX_FORM_STATE' => 'TVA pour l état ou la région',
	'PHPSHOP_TAX_FORM_COUNTRY' => 'TVA pour le pays',
	'PHPSHOP_TAX_FORM_RATE' => 'Taux de TVA (pour 19.6% => remplissez 0.196)'
); $VM_LANG->initModule( 'tax', $langvars );
?>
