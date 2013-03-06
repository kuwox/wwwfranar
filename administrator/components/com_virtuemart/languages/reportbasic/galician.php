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
	'PHPSHOP_RB_INDIVIDUAL' => 'Lista Individual de Produtos',
	'PHPSHOP_RB_SALE_TITLE' => 'Informe de Vendas',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Actividade de Vendas',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Establecer Intervalo',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mensual',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Semanal',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Diario',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Este Mes',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Último Mes',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Últimos 60 días',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Últimos 90 días',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Comenzar en',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Acabar en',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Mostrar o rango seleccionado',
	'PHPSHOP_RB_REPORT_FOR' => 'Informe para ',
	'PHPSHOP_RB_DATE' => 'Data',
	'PHPSHOP_RB_ORDERS' => 'Pedidos',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Total de Artigos vendidos',
	'PHPSHOP_RB_REVENUE' => 'Ingresos',
	'PHPSHOP_RB_PRODLIST' => 'Lista de Produtos'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>
