<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @ 2009/01/07 updated by Mauri
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
	'PHPSHOP_BROWSE_LBL' => 'Browse',
	'PHPSHOP_FLYPAGE_LBL' => 'Tuotetiedot',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Muokaa tuotetta',
	'PHPSHOP_DOWNLOADS_START' => 'Aloita lataus',
	'PHPSHOP_DOWNLOADS_INFO' => 'Sy�t� s�hk�postissa saamasi lataus-ID ja paina \'Aloita Lataus\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Sy�t� s�hk�postiosoitteesi, jos haluat tiedon tuotteen saapumisesta varastoon. 
                                        Emme k�yt� tai luovuta antamaasi osoitetta mihink��n muuhun tarkoitukseen, 
                                        kuin ilmoittaaksemme tuotteen saapumisesta varastoon.<br /><br />Kiitos!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Kiitos ilmoituksesta! <br />Ilmoitamme heti, kun varastomme on t�ydentynyt.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Ilmoita minulle!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Etsi kaikista tuoteryhmist�',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Etsi kaikista tuotetiedoista',
	'PHPSHOP_SEARCH_PRODNAME' => 'Vain tuotenimist�',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Vain valmistajista',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Vain tuotetiedoista',
	'PHPSHOP_SEARCH_AND' => 'JA',
	'PHPSHOP_SEARCH_NOT' => 'EI',
	'PHPSHOP_SEARCH_TEXT1' => 'Ensimm�inen pudotuslista antaa mahdollisuuden rajata haku yhteen tuotekategorian. 
	    Toinen pudotuslista antaa mahdollisuuden rajata haku tiettyyn tuotetiedon osaan, esim. tuotenimist�. 
	    Kun olet tehnyt n�m� rajaukset (tai pit�ytynyt perusvalinnoissa), tee haku haluamallasi hakusanalla.',
	'PHPSHOP_SEARCH_TEXT2' => ' Voit tarkentaa hakua lis�sanoilla sek� k�ytt�m�ll� niiden v�liss� JA- tai EI-operaattoreita. 
	    JA-sanan lis�ys merkitsee, ett� kummankin hakusanan on esiinnytt�v� my�s haettavassa kohteessa. 
	    EI-sanan k�ytt� merkitsee, ett� valituksi tulee kohde, jossa ensimm�inen hakusana esiintyy, 
	    mutta toinen ei.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Jatka ostoksia',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tuotekuvat kohteelle',
	'PHPSHOP_BACK_TO_DETAILS' => 'Takaisin tuotetietoihin',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Kuvaa ei l�ydetty!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Haluatko hakea tuotteita niiden teknisten muuttujien (parametrien) perusteella?<br />Voit k�ytt�� mit� tahansa valmista lomaketta:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Haku ei tuottanut tulosta.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Tuotetyyppi� ei l�ydy.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Kuten',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Eri kuin',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Koko tekstin haku',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Kaikki valittu',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Mik� tahansa valittu',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Tyhjenn� lomake',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Tuotetta ei l�ydy!',
	'PHPSHOP_PRODUCT_PACKAGING1' => ' {unit} pakkauksessa:',
	'PHPSHOP_PRODUCT_PACKAGING2' => ' {unit} laatikossa:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Yksikk�hinta',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Kysy t�st� tuotteesta',
	'VM_RECOMMEND_FORM_LBL' => 'Suosittele t�t� tuotetta',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Tyhjenn� kori',
	'VM_RETURN_TO_PRODUCT' => 'Palaa tuotteeseen',
	'EMPTY_CATEGORY' => 'Kategoria on tyhj�',
	'ENQUIRY' => 'Tuotekysely',
	'NAME_PROMPT' => 'Nimi',
	'EMAIL_PROMPT' => 'S�hk�posti',
	'MESSAGE_PROMPT' => 'Viesti',
	'SEND_BUTTON' => 'L�het�',
	'THANK_MESSAGE' => 'Kiitos tuotekyselyst�. Otamme yhteytt� mahdollisemman pian.',
	'PROMPT_CLOSE' => 'Sulje',
	'VM_RECOVER_CART_REPLACE' => 'Korvaa ostoskori tallennetulla ostoskorilla',
	'VM_RECOVER_CART_MERGE' => 'Lis�� tallennettu ostoskori nykyiseen ostoskoriin',
	'VM_RECOVER_CART_DELETE' => 'Poista tallennettu ostoskori',
	'VM_EMPTY_YOUR_CART_TIP' => 'Tyhjenn� ostoskori',
	'VM_SAVED_CART_TITLE' => 'Tallennettu ostoskori',
	'VM_SAVED_CART_RETURN' => 'Takaisin'
); $VM_LANG->initModule( 'shop', $langvars );
?>
