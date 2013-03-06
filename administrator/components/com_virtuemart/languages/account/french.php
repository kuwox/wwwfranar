<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Compte client:',
	'PHPSHOP_ACC_UPD_BILL' => 'Modifier mes informations de facturation.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Modifier mes adresses d\'expédition.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Information de compte',
	'PHPSHOP_ACC_SHIP_INFO' => 'Information d\'expédition',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Cliquer sur le nom du produit pour télécharger les fichiers',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Vous avez déjà téléchargé le(s) fichier(s) le nombre maximal de fois, ou le délai pour le téléchargement a expiré.'
); $VM_LANG->initModule( 'account', $langvars );
?>
