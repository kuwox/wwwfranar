<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator evil@serbianunderground.com
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
	'CHARSET' => 'utf-8',
	'PHPSHOP_NO_CUSTOMER' => 'Još niste registrovani. Molimo vas da upišete podatke za slanje računa.',
	'PHPSHOP_THANKYOU' => 'Hvala na porudžbini.',
	'PHPSHOP_EMAIL_SENDTO' => 'E-mail s potvrdom je poslan na vašu adresu',
	'PHPSHOP_CHECKOUT_NEXT' => 'Nastavak',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Plaćanje',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Preduzeće',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Naziv',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adresa',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Dostava',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Preduzeće',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Naziv',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adresa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Način plaćanja',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'potrebne informacije prilikom plaćanja kreditnom karticom',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Hvala na uplati.
       Transakcija je uspješno dovršena. Primićete e-mail sa potvrdom za transakciju putem PayPala.
       Možete se prijaviti na <a href=http://www.paypal.com>www.paypal.com</a> da vidite detalje transakcije.',
	'PHPSHOP_PAYPAL_ERROR' => 'Greška prilikom obrade transakcije. Status vaše porudžbine nije mogao biti ažuriran.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Vaša porudžbina je uspešno primljena!',
	'VM_CHECKOUT_TITLE_TAG' => 'Plaćanje: Korak %s od %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'ID porudžbine nije definisan!',
	'VM_CHECKOUT_FAILURE' => 'Neuspešno',
	'VM_CHECKOUT_SUCCESS' => 'Uspešno',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Validacijski Kod Kreditne Kartice',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Što je validacijski kod kreditne kartice?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 provjera nije uspjela',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'NArudžba nije pronađena',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>