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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Afficher les prix TTC?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Si la case est cochée, les prix sont affichés TVA incluses.  Sinon ils sont affichés sans la TVA',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Nom de l\'adresse',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Liste des groupes de clients',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nom du groupe',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Description du groupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formulaire du groupe de clients',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nom du groupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Description du groupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Remise sur les prix pour le groupe  par défaut des acheteurs(en %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Un montant positif de X veut dire: si le Produit n\'a aucun prix affecté à CE groupe d\'acheteurs, le prix par défaut est diminué de X %. Un montant négatif a l\'effet inverse.',
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