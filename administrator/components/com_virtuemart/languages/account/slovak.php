<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zakázaný.' ); 
/**
*
* @version $Id: slovak.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Zákaznícky účet:',
	'PHPSHOP_ACC_UPD_BILL' => 'Tu si môžeš zaktualizovať fakturačné údaje.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Tu si môžeš pridať adresu doručenia zásielky.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Informácie o účte',
	'PHPSHOP_ACC_SHIP_INFO' => 'Informácie o preprave',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klikni na názov tovaru pre stiahnutie súboru(súborov).',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Už si vyčerpal maximálny počet stiahnutí súboru alebo vypršala doba možnosti sťahovania.'
); $VM_LANG->initModule( 'account', $langvars );
?>