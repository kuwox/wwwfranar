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
	'PHPSHOP_BROWSE_LBL' => 'Prohl�et',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaily o zbo��',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editovat toto zbo��',
	'PHPSHOP_DOWNLOADS_START' => 'St�hnout',
	'PHPSHOP_DOWNLOADS_INFO' => 'Pros�me vlo�te k�d souboru pro sta�en�, kter� jste obdr�eli e-mailem a klikn�te na \'St�hnout\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Pros�me zadejte Va�i e-mailovou adresu - za�leme V�m upozorn�n�, a� bude zbo�� op�t k dispozici. 
                                        Ochrana Va�ich osobn�ch �daj� v�etn� e-mailov� adresy podl�h� platn�m z�konn�m ustanoven�m - Va�e 
                                        e-mailov� adresa bude pou�ita pouze pro v��e uveden� ��el. <br /><br />D�kujeme!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'D�kujeme za �ek�n�! <br />D�me V�m v�d�t, jakmile p�ijde zbo��.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Upozorn�te m�!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Prohled�vat v�echny kategorie',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Prohled�vat ve�ker� informace o zbo��',
	'PHPSHOP_SEARCH_PRODNAME' => 'Jen n�zvy zbo��',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Jen v�robce �i prodejce',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Jen popis zbo��',
	'PHPSHOP_SEARCH_AND' => 'and',
	'PHPSHOP_SEARCH_NOT' => 'not',
	'PHPSHOP_SEARCH_TEXT1' => 'Nejd��ve vyberte z rozbalovac�ho seznamu kategorii pro omezen� vyhled�v�n�. 
        Druh� rozbalovac� seznam umo��uje omezit vyhled�v�n� na ur�itou ��st informace o zbo�� (nap�. N�zev).
        Po vybr�n� t�chto dopl�uj�c�ch �daj� (m��ete je ov�em ponechat na standardn�m nastaven� pro hled�n� ve v�ech �daj�ch) vlo�te slovo, kter� chcete vyhledat.',
	'PHPSHOP_SEARCH_TEXT2' => ' M��ete d�le zp�es�it v� v�b�r p�id�n�m druh�ho kl��ov�ho slova a v�b�ru logick�ho oper�toru AND, NOT. 
        A znamen� �e mus� b�t ob� slova v �daj�ch vyhledan�ho zbo�� p��tomna. 
        Ne znamen� �e zbo�� bude vyhled�no, pokud v �daj�ch bude p��tomno prvn� slovo a druh� ne.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Pokra�ovat v nakupov�n�',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Dostupn� obr�zky pro',
	'PHPSHOP_BACK_TO_DETAILS' => 'Zp�t k detail�m o zbo��',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Obr�zek nebyl nalezen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Chcete vyhled�vat zbo�� podle technick�ch parametr�?<BR>Vyberte typ parametru ze seznamu:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lituji. Nebyla zad�na kategorie pro vyhled�v�n�.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lituji. Nebyl publikov�n typ zbo�� s t�mto n�zvem.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fulltextov� vyhled�v�n�',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'V�echny vybran�',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Jak�koliv z vybran�ch',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Vymazat formul��',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Litujeme, ale po�adovan� zbo�� nebylo nalezeno!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Po�et {unit}� v balen�: ',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Po�et {unit}� v krabici: ',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Price per Unit',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ask a question about this product',
	'VM_RECOMMEND_FORM_LBL' => 'Recommend this product to a friend',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Return to product',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Enter your Name',
	'EMAIL_PROMPT' => 'E-mail Address',
	'MESSAGE_PROMPT' => 'Enter your Message',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Thank you for your Enquiry. We will contact you as soon as possible.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>