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
	'PHPSHOP_NO_CUSTOMER' => 'Niste se registrerana stranka. Prosimo uredite vase podatke.',
	'PHPSHOP_THANKYOU' => 'Hvala za vase narocilo.',
	'PHPSHOP_EMAIL_SENDTO' => 'E-posta s potrditvijo je bila poslana na vas naslov',
	'PHPSHOP_CHECKOUT_NEXT' => 'Naslednje',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Informacije o pla�niku',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Podjetje',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Ime',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Naslov',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'E-naslov',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informacije o prejemniku',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Podjetje',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Ime',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Naslov',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Na�in pla�ila',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Zahtevane informacije ko je izbran na�in pla�ila s kreditno kartico',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Thanks for your payment. 
        The transaction was successful. You will get a confirmation e-mail for the transaction by PayPal. 
        You can now continue or log in at <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.',
	'PHPSHOP_PAYPAL_ERROR' => 'An error occured while processing your transaction. The status of your order could not be updated.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Your order has been successfully placed!',
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