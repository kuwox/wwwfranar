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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Zobraziť ceny vrátane daní?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Nastavuje to, či nakupujúci vidia ceny vrátane daní alebo bez daní.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adresa',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Zoznam skupín zákazníkov',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Názov skupiny',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Popis skupiny',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Skupiny zákazníkov',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Názov skupiny',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Popis skupiny',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Zľava pre predvolenú skupinu zákazníkov (v %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Pozitívna hodnota X znamená: Pokiaľ tovar nemá priradená cenu k TEJTO skupine, zníži sa predvolená cena o X %. Záporné číslo má presne opačný účinok'
); $VM_LANG->initModule( 'shopper', $langvars );
?>