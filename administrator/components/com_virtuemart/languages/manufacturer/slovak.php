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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Zoznam výrobcov',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Názov výrobcu',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Pridať informáciu',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Kategória výrobcu',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Email',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Zoznam kategórií výrobcov',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Názov kategórie',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Popis kategórie',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Výrobcovia',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Kategória výrobcov',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Informácie o kategórii',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Názov kategórie',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Popis kategórie'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>