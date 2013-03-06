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
	'PHPSHOP_NO_CUSTOMER' => 'Jūs dar neprisiregistravęs. Prašome pateikti Apmokėjimo informaciją.',
	'PHPSHOP_THANKYOU' => 'Dėkojame už Jūsų užsakymą.',
	'PHPSHOP_EMAIL_SENDTO' => 'Laiškas su patvirtinimu buvo išsiųstas šiuo adresu:',
	'PHPSHOP_CHECKOUT_NEXT' => 'Kitas',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Informacija apie Apmokėjimą',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Įmonė',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Vardas',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adresas',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Elektroninis paštas',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informacija apie Pristatymą',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Įmonė',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Vardas',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adresas',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefono Nr.',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fakso Nr.',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Apmokėjimo Būdas',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'reikalinga informacija, kai pasirinktas Apmokėjimo Būdas Kreditine Kosrtele.',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Dėkojame už apmokėjimą. 
        Operacija įvykdyta sėkmingai. Iš PayPal gausite elektroninį laišką patvirtinantį operaciją. 
        Dabar Jūs galite tęsti arba norėdami peržiūrėti operacijos detales prisijungti prie <a href=http://www.paypal.com>www.paypal.com</a> .',
	'PHPSHOP_PAYPAL_ERROR' => 'Įvyko klaida vykdant operaciją. Jūsų užsakymo būklė nepakeista.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Jūsų užsakymas sėkmingai pateiktas!',
	'VM_CHECKOUT_TITLE_TAG' => 'Atsiskaitymas: Žingsnis %s iš %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Užsakymo ID nenurodytas arba tuščias!',
	'VM_CHECKOUT_FAILURE' => 'Nepavyko',
	'VM_CHECKOUT_SUCCESS' => 'Pavyko',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Užsakymas nerastas',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>