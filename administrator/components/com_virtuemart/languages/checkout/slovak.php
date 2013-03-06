<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup do '.basename(__FILE__).' nie je povolený.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator drobec drobec@seznam.cz
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
	'PHPSHOP_NO_CUSTOMER' => 'Zatiaľ ešte nie si registrovaný zákazník. Prosím, zadaj platobné informácie.',
	'PHPSHOP_THANKYOU' => 'Vďaka za objednávku.',
	'PHPSHOP_EMAIL_SENDTO' => 'Bol odoslaný overovací e-mail',
	'PHPSHOP_CHECKOUT_NEXT' => 'Ďalej',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Informácie o platbe',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Meno',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adresa',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informácie o doručení',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Meno',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adresa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefón',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Spôsob platby',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'vyžadovaná informácia, pokiaľ je zvolená platba pomocou Kreditnej karty',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Vďaka za platbu. 
        Transakcia bola úspešná. Obdržíš potvrdzujúci e-mail o transakcii od PayPal.
        Teraz môžeš pokračovať alebo sa prihlásiť na <a href=http://www.paypal.com target=_blank>www.paypal.com</a> pre prezretie detailov o transakcii.',
	'PHPSHOP_PAYPAL_ERROR' => 'Počas spracovania tvojej transakcie došlo k chybe. Stav tvojej objednávky nemôže byť aktualizovaný.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Tvoja objednávka bola úspešne prijatá!',
	'VM_CHECKOUT_TITLE_TAG' => 'Platba: Fáza %s z %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Nie je nastavené ID objednávky, alebo je prázdne!',
	'VM_CHECKOUT_FAILURE' => 'Chyba',
	'VM_CHECKOUT_SUCCESS' => 'Úspešne',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Táto stránka je umiestnená na webe webshopu.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'Brána spracuje stránku webu a zobrazí výsledok pomocou zakódovaného SSL protokolu.',
	'VM_CHECKOUT_CCV_CODE' => 'Overovací kód kreditnej karty',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Aký je overovací kód kreditnej karty?',
	'VM_CHECKOUT_MD5_FAILED' => 'Kontrola MD5 zlyhala',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Objednávka nebola nájdená',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'Platba bola vytvorená  %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>