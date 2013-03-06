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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Mostra Prezzi IVA inclusa?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Imposta l\'opzione se i clienti vedono i prezzi IVA inclusa od esclusa.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Codice Indirizzo',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista Gruppi Clienti',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nome Gruppo',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Descrizione Gruppo',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Modulo Gruppo Clienti',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nome Gruppo',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Descrizione Gruppo',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Sconto per Gruppo Clienti di default (in %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Il valore positivo X indica: Se il Prodotto non ha un Prezzo assegnato a QUESTO Gruppo Clienti, il Prezzo di default è decrementato di X %. Un valore negativo avrà l\'effetto opposto',
	'SHOPPER_GROUP_MISSING_NAME' => 'Devi inserire un nome per il gruppo clienti.',
	'SHOPPER_GROUP_ALREADY_EXISTS' => 'Il gruppo clienti esiste già per questo venditore.',
	'SHOPPER_GROUP_DELETE_SELECT' => 'Seleziona un gruppo clienti da eliminare.',
	'SHOPPER_GROUP_DELETE_PAYMENT_METHODS_ASS' => 'Il gruppo clienti (Id: {id}) ha ancora dei Moduli di Pagamento assegnati.',
	'SHOPPER_GROUP_DELETE_USERS_ASS' => 'Il gruppo clienti (Id: {id}) ha ancora utenti assegnati.',
	'SHOPPER_GROUP_DELETE_DEFAULT' => 'Impossibile eliminare il gruppo clienti predefinito.',
	'SHOPPER_GROUP_ADDED' => 'Il nuovo gruppo clienti è stato inserito.',
	'SHOPPER_GROUP_ADD_FAILED' => 'Inserimento del gruppo clienti fallito.',
	'SHOPPER_GROUP_UPDATED' => 'Il gruppo clienti è stato aggiornato.',
	'SHOPPER_GROUP_UPDATE_FAILED' => 'Aggiornamento del gruppo clienti fallito.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>