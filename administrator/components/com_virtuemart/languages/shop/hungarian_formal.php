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
	'PHPSHOP_BROWSE_LBL' => 'B�ng�sz',
	'PHPSHOP_FLYPAGE_LBL' => 'Term�k r�szletek',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Term�k szerkeszt�se',
	'PHPSHOP_DOWNLOADS_START' => 'Let�lt�s megkezd�se',
	'PHPSHOP_DOWNLOADS_INFO' => 'K�rem, adja meg az e-mailban kapott Download-ID-t �s kattintson  a Let�lt�s megkezd�se gombra.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'K�rj�k, adja meg al�bb az e-mail c�m�t, hogy �rtes�teni tudjuk, amint a keresett term�k ism�t k�szleten lesz. Az e-mail c�m�t nem adjuk ki, nem adjuk el, nem haszn�ljuk m�s c�lra, mint kiz�r�lag arra, hogy �rtes�ts�k �nt,  amint a keresett term�k ism�t k�szleten lesz.<br /><br />K�sz�nj�k!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'K�sz�nj�k, hogy v�r r�nk! <br />R�gt�n �rtes�tj�k, amint �ssze�ll a naprak�sz lelt�r.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => '�rtes�ts!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Keres valamennyi kateg�ri�ban',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Keres valamennyi term�k inform�ci�ban',
	'PHPSHOP_SEARCH_PRODNAME' => 'Csak term�k neve',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Csak gy�rt�/elad�',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Csak term�k le�r�s',
	'PHPSHOP_SEARCH_AND' => '�s',
	'PHPSHOP_SEARCH_NOT' => 'nem',
	'PHPSHOP_SEARCH_TEXT1' => 'A els� lehull�-lista megengedi egy bizonyos kateg�ria fastrukt�ra kiv�laszt�s�t, hogy behat�rolja a keres�s�t. A m�sodik lehull�-lista megengedi a keres�s behat�rol�s�t egy bizonyos term�k-inform�ci�  (pl. N�v) szerint. Miut�n �n kiv�lasztotta ezeket (vagy valamennyit alap�rtelmezett �rt�ken hagyta), �rja be a keres�si kulcssz�t. ',
	'PHPSHOP_SEARCH_TEXT2' => ' �n tov�bb finom�thatja a keres�st tov�bbi kulcssz� �s az AND vagy NOT logikai oper�torok haszn�lat�val. Az AND haszn�lata azt jelenti, hogy mindk�t sz�nak benne kell lennie a term�k tulajdons�gainak le�r�s�ban ahhoz, hogy a tal�lati list�n megjelenjen. A NOT haszn�lata azt jelenti, hogy az els� sz�nak benne kell lennie a term�k tulajdons�gainak le�r�s�ban, a m�sodiknak meg nem ahhoz, hogy a tal�lati list�n megjelenjen.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'A bev�s�rl�s folytat�sa',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Available Images for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Back to Product Details',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Image not found!',
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