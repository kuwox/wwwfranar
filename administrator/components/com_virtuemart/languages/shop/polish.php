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
	'PHPSHOP_BROWSE_LBL' => 'Przegl�daj',
	'PHPSHOP_FLYPAGE_LBL' => 'Szczeg�y produktu',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Edytuj ten produtk',
	'PHPSHOP_DOWNLOADS_START' => 'Rozpocznij pobieranie',
	'PHPSHOP_DOWNLOADS_INFO' => 'Prosimy wpisa� numer ID pobierania, otrzymany emailem, a nast�pnie klikn�� \'Rozpocznij pobieranie\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Prosimy o podanie swojego adresu email, w celu otrzymania powiadomienia o dost�pno�ci produktu. 
                                        Nie b�dziemy udost�pnia�, wypo�ycza�, sprzedawa� lub u�ywa� tego adresu email do �adnych innych cel�w, jak tylko 
                                        do poinformowania kiedy produkt b�dzie zn�w w magazynie.<br /><br />Dzi�kujemy!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Dzi�kujemy za cierpliwo��! <br />Zostaniesz powiadomiony, jak tylko uzupe�nimy braki magazynowe.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Powiadom Mnie!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Przeszukuj wszystkie kategorie',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Przeszukuj wszystkie informacje o produkcie',
	'PHPSHOP_SEARCH_PRODNAME' => 'Tylko nazwa produktu',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Tylko producent/sprzedawca',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Tylko opis produktu',
	'PHPSHOP_SEARCH_AND' => 'i',
	'PHPSHOP_SEARCH_NOT' => 'nie',
	'PHPSHOP_SEARCH_TEXT1' => 'Pierwsza lista rozwijana pozwala na wybranie kategori, aby ograniczy� Twoje poszukiwania. 
        Druga lista rozwijana pozwala na ograniczenie Twojego poszukiwania do konkretnej informacji o produkcie (np. Nazwa). 
        Kiedy ju� wybra�e� swoje kryteria wyszukiwania (lub pozostawi�e� domy�lne WSZYSTKO), wprowad� s�owo kluczowe aby rozpocz�� wyszukiwanie. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Mo�esz dalej udoskonali� swoje poszukiwanie, poprzez dodanie drugiego s�owa kluczowego i wybranie operatora I lub NIE. 
        Wyb�r I oznacza, �e obydwa s�owa musz� by� obecne, aby produkt zosta� wy�wietlony. 
        Wyb�r NIE oznacza, �e produkt b�dzie wy�wietlony tylko wtedy, gdy pierwsze s�owo kluczowe jest obecne, a drugie nie wyst�puje.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Kontynuuj zakupy',
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