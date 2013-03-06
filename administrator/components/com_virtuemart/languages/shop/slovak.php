<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zablokovaný.' );  
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_BROWSE_LBL' => 'Prechádzať',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaily tovaru',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Upraviť tovar',
	'PHPSHOP_DOWNLOADS_START' => 'Začať sťahovanie',
	'PHPSHOP_DOWNLOADS_INFO' => 'Zadaj ID sťahovania, ktoré si dostal e-mailom a klikni na tlačidlo \'Začať sťahovanie\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Zadaj e-mailovú adresu, ak chceš dostať informáciu o doplnení tovaru na náš sklad.
		Nezdieľame, neprenajímame, nepredávame a nepoužívame e-mailové adresy na iné účely,  
		ako na informovanie o tom, že tovar je opäť na sklade.<br /><br />Vďaka!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Vďaka za trpezlivé čakanie! <br />Budeme ťa informovať okamžite, ako sa tovar dostane do nášho skladu.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Upozorni ma!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Prehľadávať všetky kategórie',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Prehľadávať informácie o tovaroch',
	'PHPSHOP_SEARCH_PRODNAME' => 'Len názov tovaru',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Len Výrobca/Predajca',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Len popis tovaru',
	'PHPSHOP_SEARCH_AND' => 'a',
	'PHPSHOP_SEARCH_NOT' => 'nie',
	'PHPSHOP_SEARCH_TEXT1' => 'Prvý rozbaľovací zoznam ti umožňuje vybrať kategóriu, na ktorú bude vyhľadvávanie obmedzené. 
        Druhý rozbaľovací zoznam ti umožní obmedziť vyhľadávanie na určitú časť informácií (napr. názov). 
        Hneď, ako si v zoznamoch vyberieš (alebo necháš VŠETKO predvolené), zadaj hľadaný výraz. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Môžeš doplniť vyhľadávanie pridaním ďalších kľúčových slov a zvolením operátorov A alebo NIE. 
        Zvolením A budú hľadané výrazy, ktoré obsahujú všetky slová. 
        Zvolením NIE bude zobrazený len výsledok len s prvým hľadaným výrazom.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Pokračovať v nákupe',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Dostupné obrázky pre',
	'PHPSHOP_BACK_TO_DETAILS' => 'Späť na detaily tovaru',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Obrázok nebol nájdený!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Chceš hľadať tovar podľa technických parametrov?<BR>Môžeš použiť niektorý z pripravených formulárov:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Prepáč, nie je tu kategória na prehľadávanie.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Prepáč, nie je tu uverejnený druh tovaru s týmto názvom.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Je ako',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'NIE JE ako',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Plnotextové vyhľadávanie',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Všetko zvolené',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Niektoré zo zvoleného',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Vynulovať formulár',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Prepáč, ale tovar, ktorý požaduješ nebol nájdený!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Počet (jednotiek) v balení:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Počet (jednotiek) v krabici:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Kusy na jednotku',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Opýtaj sa viac o tomto tovare',
	'VM_RECOMMEND_FORM_LBL' => 'Odporuč tento tovar známemu',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Prázdny košík',
	'VM_RETURN_TO_PRODUCT' => 'Späť k tovaru',
	'EMPTY_CATEGORY' => 'Táto kategórie je teraz prázdna.',
	'ENQUIRY' => 'Reakcia',
	'NAME_PROMPT' => 'Zadaj tvoje meno',
	'EMAIL_PROMPT' => 'E-mailová adresa',
	'MESSAGE_PROMPT' => 'Zadaj tvoju správu',
	'SEND_BUTTON' => 'Odoslať',
	'THANK_MESSAGE' => 'Vďaka za tvoju reakciu. Ozveme sa ti v čo najkratšom možnom čase.',
	'PROMPT_CLOSE' => 'Zavrieť',
	'VM_RECOVER_CART_REPLACE' => 'Nahraď košík uloženým obsahom košíka',
	'VM_RECOVER_CART_MERGE' => 'Pridaj uložený obsah košíka do aktuálneho košíka',
	'VM_RECOVER_CART_DELETE' => 'Vymazať uložený obsah košíka',
	'VM_EMPTY_YOUR_CART_TIP' => 'Úplne vyprázdniť košík',
	'VM_SAVED_CART_TITLE' => 'Uložený obsah košíka',
	'VM_SAVED_CART_RETURN' => 'Späť'
); $VM_LANG->initModule( 'shop', $langvars );
?>