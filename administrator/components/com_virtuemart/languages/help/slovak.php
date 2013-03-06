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
	'VM_HELP_YOURVERSION' => 'Tvoja verzia {product}',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> je úplné Open Source E-Commerce riešenie pre systémy Mambo a Joomla!. 
		Je to aplikácia, ktorá sa skladá z komponenty, viac ako 8 modulov a Mambotov/Zásuvných modulov.
		Jej základy pochádzajú zo skriptov Shopping Cartu nazývaného "phpShop" (Autori: Edikon Corp. & komunita <a href="http://www.virtuemart.org/" target="_blank">phpShop</a>).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart je vydaný pod <a href="{licenseurl}" target="_blank">licenciou {licensename}</a>.',
	'VM_HELP_TEAM' => 'Pri vývoji skriptu Shopping Cart pomohol malý tým vývojárov.',
	'VM_HELP_PROJECTLEADER' => 'Vedúci projektu',
	'VM_HELP_HOMEPAGE' => 'Domovská stránka',
	'VM_HELP_DONATION_DESC' => 'Prosím, poskytni menší dar projektu VirtueMart, aby sme mohli aj nadalej pracovat na tomto komponente a doplnat don nové a nové možnosti.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Dar môžeš poskytnút napr. cez PayPal - je to rýchle a bezpecné!'
); $VM_LANG->initModule( 'help', $langvars );
?>