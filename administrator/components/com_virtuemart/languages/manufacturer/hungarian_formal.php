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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Gy�rt�k list�ja',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Gy�rt� neve',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Inform�ci� hozz�ad�sa',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Gy�rt� kateg�ria',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Gy�rt� kateg�ri�k list�ja',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Kateg�ria neve',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Kateg�ria le�r�s',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Gy�rt�k',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Gy�rt� kateg�ria �rlap',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Kateg�ria inform�ci�',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Kateg�ria neve',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Kateg�ria le�r�s'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>