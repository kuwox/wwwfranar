<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator Miguel Pan Fidalgo
* @mail panfidalgo@gmail.com
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
	'PHPSHOP_NO_CUSTOMER' => 'Sentimolo moito mais vostede aínda non é un cliente rexistrado.<BR>Por favor rexístrese na nosa tenda primeiro.<BR>Grazas.',
	'PHPSHOP_THANKYOU' => 'Gracias polo seu pedido.',
	'PHPSHOP_EMAIL_SENDTO' => 'Un mail de confirmación foi enviado para ',
	'PHPSHOP_CHECKOUT_NEXT' => 'Seguinte',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Información de Pago',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Enderezo',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Información de Envío',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Enderezo',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Teléfono',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Método de Pago',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Información requerida cando o método de pago seleccionado é vía Tarxeta de Crédito ',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Agradecemos o seu pago. 
A transacción foi realizada satisfactoriamente. Recibirá unha confirmación por e-mail referente a esta transacción de PayPal. 
Pode continuar ou identificarse en <a href=http://www.paypal.com>www.paypal.com</a> para ver os detalles da trasacción.',
	'PHPSHOP_PAYPAL_ERROR' => 'Ocurreu un erro o procesar a transacción. O estado de seu pedido non pode ser actualizado. ',
	'PHPSHOP_THANKYOU_SUCCESS' => 'O seu pedido foi rexistrado correctamente!',
	'VM_CHECKOUT_TITLE_TAG' => 'Finalizar: Paso %s de %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'ID do pedido non establecido ou en branco!',
	'VM_CHECKOUT_FAILURE' => 'Erro',
	'VM_CHECKOUT_SUCCESS' => 'Éxito',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Esta páxina está situada na tenda virtual desta Web.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'A pasarela executa esta páxina dentro desta Web, e amosa o resultado con SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Código de validación da Tarxeta de Crédito',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Que é o Código de validación da Tarxeta de Crédito?',
	'VM_CHECKOUT_MD5_FAILED' => 'A comprobación MD5 fallou ',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Pedido non encontrado',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'O pago foi creado por %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
