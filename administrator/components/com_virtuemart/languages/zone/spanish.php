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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'País',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Destinar a zona',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Destinar zonas',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Nombre de zona',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Descripción de zona',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Costo por zona por artículo',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Limite de costo de Zona',
	'PHPSHOP_ZONE_LIST_LBL' => 'Lista de zonas',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Nombre de zona',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Descripción de zona',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Costo por zona por artículo',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Límite de costo de zona',
	'VM_ZONE_ASSIGN_PERITEM' => 'Por artículo',
	'VM_ZONE_ASSIGN_LIMIT' => 'Límite',
	'VM_ZONE_EDITZONE' => 'Edite esta zona'
); $VM_LANG->initModule( 'zone', $langvars );
?>