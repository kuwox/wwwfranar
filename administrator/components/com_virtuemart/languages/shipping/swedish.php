<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version: swedish.php 10:52 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya E-service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Fraktare',
	'PHPSHOP_RATE_LIST_LBL' => 'Fraktmetoder',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Namn',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Sortering',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Ny/Ändra Fraktare',
	'PHPSHOP_RATE_FORM_LBL' => 'Ny/Ändra leveranskostnad',
	'PHPSHOP_RATE_FORM_NAME' => 'Beskrivning',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Fraktare',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Postnummer börjar med',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Postnummer slutar med',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Lägsta vikt',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Högsta vikt',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Din förpackningsavgift',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Sortering',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Fraktare',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Fraktbeskrivning',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Vikt från ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... upp till',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Fraktföretag',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Sortering'
); $VM_LANG->initModule( 'shipping', $langvars );
?>