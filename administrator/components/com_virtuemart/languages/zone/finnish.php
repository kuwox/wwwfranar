<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @ 2009/01/07 updated by Mauri
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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Maa',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'M��r�� vy�hykkeeseen',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'M��rit� vy�hykkeet',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Vy�hykkeen nimi',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Vy�hykkeen kuvaus',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Vy�hykkeen kustannus per artikkeli',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Vy�hykkeen kustannusraja',
	'PHPSHOP_ZONE_LIST_LBL' => 'Vy�hykeluettelo',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Vy�hykkeen nimi',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Vy�hykkeen kuvaus',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Vy�hykkeen kustannus per artikkeli',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Vy�hykkeen kustannusraja',
	'VM_ZONE_ASSIGN_PERITEM' => 'per artikkeli:',
	'VM_ZONE_ASSIGN_LIMIT' => 'Raja',
	'VM_ZONE_EDITZONE' => 'Muokkaa t�t� vy�hykett�'
); $VM_LANG->initModule( 'zone', $langvars );
?>
