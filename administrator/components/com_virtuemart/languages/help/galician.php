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
	'VM_HELP_YOURVERSION' => 'Versi�n {product} ',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> � unha completa soluci�n, desarrollada como Open Source, de comercio electr�nico para Mambo e Joomla!. 
		� unha aplicaci�n que se distrib�e como un compo�ente, con m�is de 8 Modulos e Mambots/Plugins.
		Fundamenta as s�as ra�ces nun Shopping Cart Script chamado "phpShop" (Autores: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart distrib�ese baixo a licencia <a href="{licenseurl}" target="_blank">{licensename} License</a>.',
	'VM_HELP_TEAM' => 'Existe un pequeno equipo de desarrolladores que axudan a evolucionar este Shopping Cart Script.',
	'VM_HELP_PROJECTLEADER' => 'L�der do Proxecto',
	'VM_HELP_HOMEPAGE' => 'P�xina Web',
	'VM_HELP_DONATION_DESC' => 'Por favor, considera unha pequena donaci�n para o proxecto VirtueMart para que se poida seguir traballando neste compo�ente e incrementar as s�as funcionalidades.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Faga os seus pagos con PayPal - � r�pido, libre e seguro!'
); $VM_LANG->initModule( 'help', $langvars );
?>
