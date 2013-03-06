<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Preise inkl. MwSt. zeigen?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Falls aktiviert, werden alle Preise im Shop einschließlich Umsatzsteuern angezeigt.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Kurzname für Adresse',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Kundengruppenliste',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Gruppenname',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Gruppenbeschreibung',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Kundengruppenformular',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Gruppenname',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Gruppenbeschreibung',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Preis-Nachlass auf die Standard-Shoppergruppe (in %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Ein positiver Betrag X.xx bedeutet: Falls ein Produkt keinen Preis für DIESE Shoppergruppe hat, wird der Preis der Standard-Shoppergruppe um X.xx % vermindert. Ein negativer Betrag erwirkt das Gegenteil.',
	'SHOPPER_GROUP_MISSING_NAME' => 'You must enter a shopper group name.',
	'SHOPPER_GROUP_ALREADY_EXISTS' => 'Shopper group already exists for this vendor.',
	'SHOPPER_GROUP_DELETE_SELECT' => 'Please select a shopper group to delete.',
	'SHOPPER_GROUP_DELETE_PAYMENT_METHODS_ASS' => 'This Shopper Group (Id: {id}) still has Payment Methods assigned to it.',
	'SHOPPER_GROUP_DELETE_USERS_ASS' => 'There are still Users assigned to this Shopper Group (Id: {id})',
	'SHOPPER_GROUP_DELETE_DEFAULT' => 'Cannot delete the default shopper group.',
	'SHOPPER_GROUP_ADDED' => 'The Shopper Group has been added.',
	'SHOPPER_GROUP_ADD_FAILED' => 'Failed to add the Shopper Group',
	'SHOPPER_GROUP_UPDATED' => 'The Shopper Group has been updated.',
	'SHOPPER_GROUP_UPDATE_FAILED' => 'Failed to update the Shopper Group'
); $VM_LANG->initModule( 'shopper', $langvars );
?>