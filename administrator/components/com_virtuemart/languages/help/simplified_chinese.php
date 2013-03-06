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
	'VM_HELP_YOURVERSION' => '您的{product}版本',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">VirtueMart</span>是开源项目Mambo和Joomla!下的BtoC网上商店解决方案，包括一个组件, 多个模块和插件。VirtueMart	源自“phpShop”(作者: Edikon公司和<a href="http://www.virtuemart.org/" target="_blank">phpShop</a>)。',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart的License：<a href="{licenseurl}" target="_blank">{licensename} License</a>。',
	'VM_HELP_TEAM' => '现在VirtueMart由一个开发小组维护和开发。',
	'VM_HELP_PROJECTLEADER' => '项目组长',
	'VM_HELP_HOMEPAGE' => '网址',
	'VM_HELP_DONATION_DESC' => '请捐赠VirtueMart以帮助我们发展。',
	'VM_HELP_DONATION_BUTTON_ALT' => '可以通过PayPal捐赠。'
); $VM_LANG->initModule( 'help', $langvars );
?>