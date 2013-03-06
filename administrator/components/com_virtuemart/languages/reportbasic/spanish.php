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
	'PHPSHOP_RB_INDIVIDUAL' => 'Informe de lista individual de productos',
	'PHPSHOP_RB_SALE_TITLE' => 'Informe de ventas',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Actividad de ventas',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Ingresar intervalo',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mensual',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Semanal',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Diario',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Este Mes',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => '�ltimo Mes',
	'PHPSHOP_RB_LAST60_BUTTON' => '�ltimos 60 d�as',
	'PHPSHOP_RB_LAST90_BUTTON' => '�ltimos 90 d�as',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Comenzar en',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Finalizar en',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Muestre la gama seleccionada',
	'PHPSHOP_RB_REPORT_FOR' => 'Informe por ',
	'PHPSHOP_RB_DATE' => 'Fecha',
	'PHPSHOP_RB_ORDERS' => 'Pedidos',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Total de art�culos vendidos',
	'PHPSHOP_RB_REVENUE' => 'Ganancias',
	'PHPSHOP_RB_PRODLIST' => 'Listado de productos'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>