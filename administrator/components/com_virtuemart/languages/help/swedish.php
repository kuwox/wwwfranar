<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Mia Steen, First Solutions & Stefan Gagner, Mei Ya Service, http://www.mei-ya.se
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
	'VM_HELP_YOURVERSION' => 'Din {product} version',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> är en fullständig Open Source E-Commerce lösning för Mambo och Joomla!. 
		Det är en applikation som består av en Komponent, mer än 8 Moduler och Mambots/Plugin:er.
		Den har sitt ursprung i ett Kundvagnsskript kallat "phpShop" (Förf: Edikon Corp. & <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart är licensierad under <a href="{licenseurl}" target="_blank">{licensename} Licens</a>.',
	'VM_HELP_TEAM' => 'Det är ett litet team utvecklare som hjälps åt att utveckla detta Kundvagsnsskript.',
	'VM_HELP_PROJECTLEADER' => 'Projektledare',
	'VM_HELP_HOMEPAGE' => 'Hemsida',
	'VM_HELP_DONATION_DESC' => 'Gör gärna en donation till VirtueMart-projektet för att hjälpa oss fortsätta arbetet med denna komponent och att skapa nya funktioner.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Betala med PayPal - det är snabbt, gratis och säkert!'
); $VM_LANG->initModule( 'help', $langvars );
?>