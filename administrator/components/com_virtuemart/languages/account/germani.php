<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : germani.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Kundeninformationen von:',
	'PHPSHOP_ACC_UPD_BILL' => 'Hier kannst Du Deine Rechnungsadressdaten �ndern',
	'PHPSHOP_ACC_UPD_SHIP' => 'Hier kannst Du Lieferadressen hinzuf�gen oder vorhandene �ndern.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Rechnungsadresse',
	'PHPSHOP_ACC_SHIP_INFO' => 'Lieferadressen',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klicken Sie auf den Produktnamen um die Datei herunter zu laden.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Sie haben die Anzahl der maximalen Downloads bereits erreicht, oder die Downloadperiode ist abgelaufen.'
); $VM_LANG->initModule( 'account', $langvars );
?>