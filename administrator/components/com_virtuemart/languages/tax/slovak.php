<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zablokovaný.' );  
/**
*
* @version $Id: slovak.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator drobec drobec@seznam.cz
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
	'CHARSET' => 'utf-8',
	'PHPSHOP_TAX_LIST_LBL' => 'Zoznam sadzieb dane',
	'PHPSHOP_TAX_LIST_STATE' => 'Štát alebo oblasť dane',
	'PHPSHOP_TAX_LIST_COUNTRY' => 'Krajina dane',
	'PHPSHOP_TAX_FORM_LBL' => 'Pridať informáciu o dani',
	'PHPSHOP_TAX_FORM_STATE' => 'Kraj alebo oblasť dane',
	'PHPSHOP_TAX_FORM_COUNTRY' => 'Štát dane',
	'PHPSHOP_TAX_FORM_RATE' => 'Sadzba dane (pre 16% => napíš 0.16)'
); $VM_LANG->initModule( 'tax', $langvars );
?>