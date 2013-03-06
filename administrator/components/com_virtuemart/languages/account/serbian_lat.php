<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version : serbian.php 1071 21.12.2008 01:00:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator evil@serbianunderground.com
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Korisnički račun:',
	'PHPSHOP_ACC_UPD_BILL' => 'Ovde možete izmeniti svoje podatke za plaćanje.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Ovde možete dodati ili urediti adresu za dostavu.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Korisničke informacije',
	'PHPSHOP_ACC_SHIP_INFO' => 'Dostavna adresa',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Kliknite na naziv proizvoda za download.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Proizvod ste već preuzeli maksimalni broj puta ili je istekao period trajanja downloada.'
); $VM_LANG->initModule( 'account', $langvars );
?>