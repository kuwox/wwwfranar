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
	'PHPSHOP_NO_CUSTOMER' => '�� ert ekki skr��ur notandi. Settu inn uppl�singar fyrir grei�slu.',
	'PHPSHOP_THANKYOU' => '�akka ��r fyrir a� versla vi� 24/7.',
	'PHPSHOP_EMAIL_SENDTO' => 'Sta�festing hefur veri� send � netfangi�',
	'PHPSHOP_CHECKOUT_NEXT' => 'N�st',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Uppl�singar um grei�slu',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Fyrirt�ki',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nafn',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Heimilisfang',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Netfang',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Uppl�singar um afhendingu',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Fyrirt�ki',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nafn',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Heimilisfang',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'S�mi',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Grei�slum�ti',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'nau�synlegar uppl�singar ef greitt er me� kreditkorti',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Takk fyrir grei�sluna. 
        A�ger�in t�kst. �� f�r� sta�festingu fr� PayPal. 
        �� getur n� skr�� �ig inn hj� <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.',
	'PHPSHOP_PAYPAL_ERROR' => 'Villa kom upp vi� a�ger�ina. Ekki var h�gt a� uppf�ra st��u p�ntunarinnar.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'P�ntunin ��n var send!',
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