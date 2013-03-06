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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Rodyti kainas su mokesčiais?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Nurodo ar pirkėjas matys kainas su mokesčiais ar be.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adreso trumpinys',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Pirkėjų grupių sąrašas',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Grupės pavadinismas',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Grupės apibūdinimas',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Pirkėjų grupės forma',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Grupės pavadinimas',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Grupės apibūdinimas',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Nuolaida taikoma Pirkėjų grupei (nurodyti %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Teigiamas X reiškia: jei prekė neturi nurodytos kainos Šiai pirkėjų grupei, standartinė kaina sumažinama X %. Neigiama reikšmė standartinę kainą padidina X %.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>