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
	'PHPSHOP_NO_CUSTOMER' => 'Nie jeste� jeszcze zarejestrowanym klientem. Prosimy o wprowadzenie swoich danych.',
	'PHPSHOP_THANKYOU' => 'Dzi�kujemy za zam�wienie.',
	'PHPSHOP_EMAIL_SENDTO' => 'Potwierdzenie zam�wienia zosta�o wys�ane do',
	'PHPSHOP_CHECKOUT_NEXT' => 'Nast�pny',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Dane klienta',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nazwa',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adres',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informacje o wysy�ce',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nazwa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adres',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Faks',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Metoda p�atno�ci',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'informacja wymagana je�li wybrana zosta�a p�atno�� kart� kredytow�',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Dzi�kujemy za dokonan� p�atno��. 
        Transakcja przebieg�a pomy�lnie. Otrzymasz potwierdzenie transakcji od PayPal poprzez email. 
        Mo�esz teraz kontynuowa� lub zalogowa� si� na <a href=http://www.paypal.com>www.paypal.com</a>, aby zobaczy� szczeg�y transakcji.',
	'PHPSHOP_PAYPAL_ERROR' => 'Podczas transakcji wyst�pi� b��d. Stan Twojego zam�wienia nie mo�e zosta� zaktualizowany.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Twoje zam�wienie zosta�o pomy�lnie wys�ane!',
	'VM_CHECKOUT_TITLE_TAG' => 'Checkout: Step %s of %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Order ID is not set or emtpy!',
	'VM_CHECKOUT_FAILURE' => 'Failure',
	'VM_CHECKOUT_SUCCESS' => 'Success',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Order not found',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>