<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian_formal.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
	'PHPSHOP_TAX_LIST_LBL' => 'Ad�z�si r�t�k list�ja',
	'PHPSHOP_TAX_LIST_STATE' => 'Ad�z�si �llam vagy r�gi�',
	'PHPSHOP_TAX_LIST_COUNTRY' => 'Ad�z�si orsz�g',
	'PHPSHOP_TAX_FORM_LBL' => 'Ad�z�si inform�ci�k hozz�ad�sa',
	'PHPSHOP_TAX_FORM_STATE' => 'Ad�z�si �llam vagy r�gi�',
	'PHPSHOP_TAX_FORM_COUNTRY' => 'Ad�z�si orsz�g',
	'PHPSHOP_TAX_FORM_RATE' => 'Ad�z�si r�ta (16%-os ad� megad�s�hoz 0,16-ot �rjon be)'
); $VM_LANG->initModule( 'tax', $langvars );
?>