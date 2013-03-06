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
	'CHARSET' => 'ISO-8859-1',
	'VM_HELP_YOURVERSION' => 'Su versi�n {product}',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> es la solucion completa de comercio electr�nico para Joomla!. 
		Esta aplicaci�n viene con un componente, mas de 8 m�dulos y Plugins.',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart esta licenciado por <a href="{licenseurl}" target="_blank">{licensename} Licencia</a>.',
	'VM_HELP_TEAM' => 'Hay un grupo peque�o de desarrolladores ayudando a evolucionar este scipt.',
	'VM_HELP_PROJECTLEADER' => 'Lider de proyecto',
	'VM_HELP_HOMEPAGE' => 'P�gina de inicio',
	'VM_HELP_DONATION_DESC' => 'Por favor considere una peque�a donaci�n para seguir desarrollando el componente y sus m�dulos.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Haga pagos con PayPal - es gratis, rapido y seguro!'
); $VM_LANG->initModule( 'help', $langvars );
?>