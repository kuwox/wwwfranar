<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
* @version: swedish.php 10:53 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya E-service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
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
	'PHPSHOP_BROWSE_LBL' => 'Bläddra',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktuppgifter',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Ändra denna produkt',
	'PHPSHOP_DOWNLOADS_START' => 'Starta Nedladdning',
	'PHPSHOP_DOWNLOADS_INFO' => 'Ange det Nedladdnings-ID du fått via epost och klicka på \'Starta Nedladdning\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Ange din epostadress nedan för att få meddelande när denna produkt åter finns i lager. 
		Vi kommer inte att vidarebefordra, hyra ut eller sälja denna adress. Den kommer endast att användas för meddelanden om lagerstatus.<br /><br />Tack så mycket!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Tack för att du väntar! <br />Du får meddelande så snart vi gjort inventering.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Meddela mig!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Sök alla Kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Sök all produktinformation',
	'PHPSHOP_SEARCH_PRODNAME' => 'Endast Produktnamn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Endast Tillverkare/Återförsäljare',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Endast produktbeskrivning',
	'PHPSHOP_SEARCH_AND' => 'och',
	'PHPSHOP_SEARCH_NOT' => 'inte',
	'PHPSHOP_SEARCH_TEXT1' => 'I den första rullgardinslistan kan du begränsa din sökning till en kategori. 
        I den andra rullgardinslistan kan du söka en särskild produktinformation (ex. Namn). 
        När du gjort detta (eller lämnat ALLA som standard), kan du ange ett sökord. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Du kan ytterligare förfina din sökning genom att ange ett andra sökord och välja OCH eller INTE. 
        Välja OCH innebär att båda sökorden måste finnas i produkten för att den skall visas. 
        Välja INTE innebär att endast det första skall finnas och inte det andra.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Fortsätt handla',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tillgängliga bilder för',
	'PHPSHOP_BACK_TO_DETAILS' => 'Tillbaka till Produktuppgifterna',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Bilden ej funnen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Söka efter produkter med tekniska parametrar?<BR>Du kan använda förberedda formulär:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Ledsen. Det finns ingen kategori att söka.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Ledsen. Det finns inga publicerade produktertyper med detta namn.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Liknar',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Liknar INTE',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'FulltextSökning',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alla markerade',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Någon markerad',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Återställ formulär',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Ledsen. Produkten du frågat efter kunde inte hittas!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Antal {unit} i förpackning:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Antal {unit} i kartong:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Pris per enhet',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ställ en fråga om denna produkt',
	'VM_RECOMMEND_FORM_LBL' => 'Rekommendera denna produkt till en vän',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Töm korgen',
	'VM_RETURN_TO_PRODUCT' => 'Återvänd till produkt',
	'EMPTY_CATEGORY' => 'Denna kategori har inga varor nu.',
	'ENQUIRY' => 'Förfrågan',
	'NAME_PROMPT' => 'Ange ditt namn',
	'EMAIL_PROMPT' => 'Epostadress',
	'MESSAGE_PROMPT' => 'Skriv ett meddelande',
	'SEND_BUTTON' => 'Skicka',
	'THANK_MESSAGE' => 'Tack för din förfrågan. Vi kommer att kontakta dig snarast möjligt.',
	'PROMPT_CLOSE' => 'Stäng',
	'VM_RECOVER_CART_REPLACE' => 'Ersätt varukorg med sparad korg',
	'VM_RECOVER_CART_MERGE' => 'Lägg sparad varukorg till aktuell korg',
	'VM_RECOVER_CART_DELETE' => 'Ta bort sparad varukorg',
	'VM_EMPTY_YOUR_CART_TIP' => 'Töm varukorgen',
	'VM_SAVED_CART_TITLE' => 'Sparad Varukorg',
	'VM_SAVED_CART_RETURN' => 'Tillbaka'
); $VM_LANG->initModule( 'shop', $langvars );
?>