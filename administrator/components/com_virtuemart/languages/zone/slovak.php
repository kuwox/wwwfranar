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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Štát',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Priradiť do pásma',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Priradiť pásma',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Názov pásma',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Popis pásma',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Náklady v zóne za položku',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Limit nákladov v zóne',
	'PHPSHOP_ZONE_LIST_LBL' => 'Zoznam zón',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Názov pásma',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Popis pásma',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Náklady na položku v pásme',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Limit nákladov v pásme',
	'VM_ZONE_ASSIGN_PERITEM' => 'Na položku',
	'VM_ZONE_ASSIGN_LIMIT' => 'Limit',
	'VM_ZONE_EDITZONE' => 'Upraviť toto pásmo'
); $VM_LANG->initModule( 'zone', $langvars );
?>