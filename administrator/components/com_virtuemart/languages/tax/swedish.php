<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version: swedish.php 10:57 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya E-service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
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
	'PHPSHOP_TAX_LIST_LBL' => 'Momssatser',
	'PHPSHOP_TAX_LIST_STATE' => 'Stat eller Region',
	'PHPSHOP_TAX_LIST_COUNTRY' => 'Land',
	'PHPSHOP_TAX_FORM_LBL' => 'Ny Momsinformation',
	'PHPSHOP_TAX_FORM_STATE' => 'Stat eller Region',
	'PHPSHOP_TAX_FORM_COUNTRY' => 'Land',
	'PHPSHOP_TAX_FORM_RATE' => 'Momssats (för 25% => fyll i 0.25)'
); $VM_LANG->initModule( 'tax', $langvars );
?>