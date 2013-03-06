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
	'PHPSHOP_BROWSE_LBL' => 'Gennemse',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktdetaljer',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Rediger produkt',
	'PHPSHOP_DOWNLOADS_START' => 'Start Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Indtast download-ID\'et som De har modtaget pr. e-mail og klik \'Start Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Indtast Deres emailadresse nedenfor for at f� besked n�r dette produkt er p� lager igen.
                                        Vi hverken deler, udlejer, s�lger eller p� anden m�de benytter Deres emailadresse til andre form�l end at holde
                                        Dem orienteret om hvorn�r produktet igen er p� lager.<br /><br />Tak!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Tak for Deres t�lmodighed <br />De f�r besked s� snart vi kan give en leveringsdato.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Notify Me!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'S�g i alle kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'S�g i alle produktinformationer',
	'PHPSHOP_SEARCH_PRODNAME' => 'Kun produktnavn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Kun producent/s�lger',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Kun produktbeskrivelse',
	'PHPSHOP_SEARCH_AND' => 'og',
	'PHPSHOP_SEARCH_NOT' => 'undtagen',
	'PHPSHOP_SEARCH_TEXT1' => 'I den f�rste drop-down-liste kan De begr�nse s�gningen til en bestemt kategori. 
        I den anden drop-down-liste kan De begr�nse s�gningen til en bestemt type produktinformation (f.eks. Navn). 
        N�r De har valgt disse (eller valgt standard), indtast da hvad der skal s�ges efter. ',
	'PHPSHOP_SEARCH_TEXT2' => ' De kan specificere s�gningen yderligere ved at tilf�je yderligere s�geord og v�lge \'OG\' eller \'UNDTAGEN\' operatoren. 
        Hvis De v�lger \'OG\' skal begge ord findes for at et produkt vises. 
        Hvis De v�lger \'UNDTAGEN\' vises kun s�geresultater indeholdende det f�rste s�geord hvor det andet s�geord ikke findes i sammenh�ngen.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Forts�t indk�b',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tilg�ngelige billeder for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Tilbage til produktdetaljer',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Billede er ikke fundet!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'I am sorry. There is no category for search.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'I am sorry. There is no published Product Type with this name.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Full-Text Search',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'All Selected',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Any Selected',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Reset Form',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Sorry, but the Product you\'ve requested wasn\'t found!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Number {unit}s in packaging:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Number {unit}s in box:',
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