<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya Service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Kundsida - ',
	'PHPSHOP_ACC_UPD_BILL' => 'Här kan du uppdatera dina uppgifter.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Här kan du lägga till och ändra adresser.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Faktureringsinformation',
	'PHPSHOP_ACC_SHIP_INFO' => 'Leveransinformation',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klicka på en produktnamn för att ladda ned.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Du har redan laddat ned filen eller filerna, maximalt antal gånger eller så har din nedladdningstid förfallit.'
); $VM_LANG->initModule( 'account', $langvars );
?>