<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : bulgarian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator BULTRANS
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
	'VM_HELP_YOURVERSION' => 'Вашата версия на продукта',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> е Open Source E-Commerce решение за Вашия Mambo или Joomla!. 
		Това приложение има с компонент, повече от 8 модула и плъгина.
		Източник на скрипта е "phpShop" (Authors: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart е лицензиран под <a href="{licenseurl}" target="_blank">{licensename} License</a>.',
	'VM_HELP_TEAM' => 'Разработчици на проекта:',
	'VM_HELP_PROJECTLEADER' => 'Шеф на проекта',
	'VM_HELP_HOMEPAGE' => 'Страница',
	'VM_HELP_DONATION_DESC' => 'Вие може да помогнете с малко дарение за развитието на проекта.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Използвайте за тази цел PayPal - бързо, безплатно и сигурно!'
); $VM_LANG->initModule( 'help', $langvars );
?>