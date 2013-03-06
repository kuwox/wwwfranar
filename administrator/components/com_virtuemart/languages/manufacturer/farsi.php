<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
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
* Translated by Mohammad Hosin Fazeli
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'ليست توليد كنندگان',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'نام توليد كننده',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'افزودن اطلاعات',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'مجموعه مربوط به توليد كننده',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'پست الكترونيكي',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'ليست مجموعه هاي مربوط به توليدكنندگان',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'نام مجموعه',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'شرح مجموعه',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'توليد كنندگان',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'فرم مجموعه توليدكنندگان',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'اطلاعات مجموعه',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'نام مجموعه',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'شرح مجموعه',
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>