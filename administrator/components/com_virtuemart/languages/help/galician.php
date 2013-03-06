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
	'VM_HELP_YOURVERSION' => 'Versión {product} ',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> é unha completa solución, desarrollada como Open Source, de comercio electrónico para Mambo e Joomla!. 
		É unha aplicación que se distribúe como un compoñente, con máis de 8 Modulos e Mambots/Plugins.
		Fundamenta as súas raíces nun Shopping Cart Script chamado "phpShop" (Autores: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart distribúese baixo a licencia <a href="{licenseurl}" target="_blank">{licensename} License</a>.',
	'VM_HELP_TEAM' => 'Existe un pequeno equipo de desarrolladores que axudan a evolucionar este Shopping Cart Script.',
	'VM_HELP_PROJECTLEADER' => 'Líder do Proxecto',
	'VM_HELP_HOMEPAGE' => 'Páxina Web',
	'VM_HELP_DONATION_DESC' => 'Por favor, considera unha pequena donación para o proxecto VirtueMart para que se poida seguir traballando neste compoñente e incrementar as súas funcionalidades.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Faga os seus pagos con PayPal - é rápido, libre e seguro!'
); $VM_LANG->initModule( 'help', $langvars );
?>
