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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Държава',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Определи за зона',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Определяне на зони',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Име на зоната',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Описание на зоната',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Цена за един артикул в зоната',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Лимит за стойност на зона',
	'PHPSHOP_ZONE_LIST_LBL' => 'Списък на зоните',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Име на зоната',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Описание на зоната',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Цена за един артикул в зоната',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Лимит за стойност на зона',
	'VM_ZONE_ASSIGN_PERITEM' => 'За едивица',
	'VM_ZONE_ASSIGN_LIMIT' => 'Предел',
	'VM_ZONE_EDITZONE' => 'Редакция'
); $VM_LANG->initModule( 'zone', $langvars );
?>