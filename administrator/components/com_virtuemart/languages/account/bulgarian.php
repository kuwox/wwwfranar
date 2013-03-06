<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : bulgarian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator BULTRANS
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Клиентски профил:',
	'PHPSHOP_ACC_UPD_BILL' => 'Тук можете да промените информацията за плащане.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Тук можете да променяте и добавяте адреси за доставка.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Информация за клиента',
	'PHPSHOP_ACC_SHIP_INFO' => 'Информация за доставка',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Щракнете по името на продукта, за да свалите файла.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Вече сте изчерпали лимита си на позволени сваляния или пък времето за сваляне на файла е изтекло.'
); $VM_LANG->initModule( 'account', $langvars );
?>
