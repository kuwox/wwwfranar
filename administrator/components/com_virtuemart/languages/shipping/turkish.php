<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : turkish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Nakliyeci Listesi',
	'PHPSHOP_RATE_LIST_LBL' => 'Nakliye Tarife Listesi',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Ad�',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Listorder',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Nakliyeci d�zelt / olu�tur',
	'PHPSHOP_RATE_FORM_LBL' => 'Tarife g�nleme / olu�turma',
	'PHPSHOP_RATE_FORM_NAME' => 'Tarife A��klamas�',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Nakliyeci',
	'PHPSHOP_RATE_FORM_COUNTRY' => '�lke',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Ba�lang�� Posta Kodu',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Biti� Posta Kodu',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'End���k A��rl�k',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Eny�ksek A��rl�k',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Paketleme �cretiniz',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Kur',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Listorder',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Nakliyeci',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Tarife a��klamas�',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'A��rl�k den ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... e',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Nakliye �irketi',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Listorder'
); $VM_LANG->initModule( 'shipping', $langvars );
?>