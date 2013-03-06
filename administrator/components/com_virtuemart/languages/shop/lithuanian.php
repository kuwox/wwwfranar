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
	'PHPSHOP_BROWSE_LBL' => 'Naršyti',
	'PHPSHOP_FLYPAGE_LBL' => 'Produkto Aprašymas',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Redaguoti produktą',
	'PHPSHOP_DOWNLOADS_START' => 'Parsisiųsti',
	'PHPSHOP_DOWNLOADS_INFO' => 'Prašome įvesti Parsisiuntimo-ID kurį gavote elektroniniu paštu ir spragtelėti \'Parsisiųsti\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Jei pageidaujate būti informuotas, kada šią prekę turėsime sandėlyje, prašome įvesti savo elektroninio pašto adresą. 
<br /><br />Ačiū!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Ačiū, kad laukėte! <br />Mes Jums pranešime iškart kai turėsime prekę sandėlyje.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Pranešti!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Ieškoti visose kategorijose',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Ieškoti visame produkto aprašyme',
	'PHPSHOP_SEARCH_PRODNAME' => 'Tik produkto pavadinime',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Gamintoją/Tiekėją',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Tik produkto apibūdinime',
	'PHPSHOP_SEARCH_AND' => 'ir',
	'PHPSHOP_SEARCH_NOT' => 'ne',
	'PHPSHOP_SEARCH_TEXT1' => 'Pirmas išsiskleidžiantis laukas leidžia Jums pasirinkti kategoriją, kurioje bus vykdoma paieška. 
        Antras išsiskleidžiantis laukas leidžia Jums pasirinkti tam tikrą informacinį produkto lauką (pvz. Pavadinimas), kuriame bus vykdoma paieška. 
        Kai pasirinkote (arba palikote \'Visi\'), įveskite raktinį paieškos žodį. ',
	'PHPSHOP_SEARCH_TEXT2' => 'Galite susiaurinti paieškos rezultatus įvesdami antrą paieškos raktinį žodį ir pasirinkti \'IR\', \'NE\' operatorių. 
        Pasirinkus \'IR\' nurodote, kad abu žodžiai privalo būti surasti. 
        Pasirinkus \'NE\' nurodote, kad tik pirmas žodis turi būti surastas.
        and the second is not.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Tęsti Pirkimą',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Prekės paveikslėliai',
	'PHPSHOP_BACK_TO_DETAILS' => 'Grįžti į Prekės Aprašymą',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Paveikslėlis nerastas!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Ar norite surasti prekę remiantis techniniais parametrais?<BR>Galite pasinaudoti šia forma:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Atsiprašome. Nėra paieškos kategorijos.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Atsiprašome, prekės tipo tokiu pavadinimu nėra.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Yra kaip',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Ieškoti visame tekste',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Visi pasirinkti',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Betkuris pasirinktas',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Išvalyti formą',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Atsiprašome, bet Jūsų pasirinkta prekė nerasta.',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Vienetų skaičius pakuotėje.',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Vienetų skaičius dežėje.',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Vieneto Kaina',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Užduoti klausimą susijusį su šiuo produktu',
	'VM_RECOMMEND_FORM_LBL' => 'Rekomenduoti draugui',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Ištuštinti krepšelį',
	'VM_RETURN_TO_PRODUCT' => 'Grįžti prie prekės',
	'EMPTY_CATEGORY' => 'Ši kategorija šiuo metu tuščia.',
	'ENQUIRY' => 'Užklausa',
	'NAME_PROMPT' => 'Įveskite savo vardą',
	'EMAIL_PROMPT' => 'Elektroninio pašto adresą',
	'MESSAGE_PROMPT' => 'Įveskite Jūsų tekstą',
	'SEND_BUTTON' => 'Siųsti',
	'THANK_MESSAGE' => 'Dėkojame už Jūsų užklausimą. Mes su Jumis susiseksime kai tik galėsime.',
	'PROMPT_CLOSE' => 'Uždaryti',
	'VM_RECOVER_CART_REPLACE' => 'Pakeisti prekių krepšelį išsaugotu.',
	'VM_RECOVER_CART_MERGE' => 'Pridėti išsaugotą prekių krepšelį prie šio krepšelio.',
	'VM_RECOVER_CART_DELETE' => 'Panaikinti išsaugota krepšelį.',
	'VM_EMPTY_YOUR_CART_TIP' => 'Išvalyti krepšelį',
	'VM_SAVED_CART_TITLE' => 'Išsaugotas krepšelis',
	'VM_SAVED_CART_RETURN' => 'Grįžti'
); $VM_LANG->initModule( 'shop', $langvars );
?>