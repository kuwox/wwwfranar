<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zablokovaný.' );  
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Aktualizovat kupón',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kód',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Percentá alebo celková suma',
	'PHPSHOP_COUPON_TYPE' => 'Druh kupónu',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Darcekový kupón je vymazaný po použití na zlavu z objednávky. Trvalý kupón môže byt použitý tak casto, ako zákazníci chcú.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Darcekový kupón',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Trvalý kupón',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Hodnota',
	'PHPSHOP_COUPON_PERCENT' => 'V percentách',
	'PHPSHOP_COUPON_TOTAL' => 'Celkom'
); $VM_LANG->initModule( 'coupon', $langvars );
?>