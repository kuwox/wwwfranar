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
	'PHPSHOP_NO_CUSTOMER' => 'Lo siento, pero usted no es un cliente registrado.<BR>
                                    Por favor, proceda a registrarse en nuestra tienda.<BR>
                                    Gracias.',
	'PHPSHOP_THANKYOU' => 'Gracias por su pedido.',
	'PHPSHOP_EMAIL_SENDTO' => 'Un correo de confirmación le ha sido enviado a',
	'PHPSHOP_CHECKOUT_NEXT' => 'Próximo',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Información de emisión de comprobantes',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Razón Social',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nombre',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Dirección',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Correo Electrónico',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Información del Envío',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Razón Social',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nombre',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Dirección',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Teléfono',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Forma de Pago',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Información requerida cuando en la forma de pago es seleccionada tarjeta de crédito',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Gracias por su pago. La transacción fue aceptada. Recibirá un E-mail de confirmación para la transacción de PayPal.
        Ahora puede continuar o ingresar a  <a href=http://www.paypal.com>www.paypal.com</a> para ver el detalle de la transacción.',
	'PHPSHOP_PAYPAL_ERROR' => 'Ha ocurrido un error durante de su proceso de transacción. No ha podido ser actualizado su pedido.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Se ha grabado correctamente su pedido',
	'VM_CHECKOUT_TITLE_TAG' => 'Comprar: paso %s de %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'ID de pedido no se encuentra o esta vacía!',
	'VM_CHECKOUT_FAILURE' => 'Fallido',
	'VM_CHECKOUT_SUCCESS' => 'Exitoso',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Esta página se encuentra en el sitio web.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'El gateway se ejecuta en el sitio web, y muestra luego el SSL Encriptado.',
	'VM_CHECKOUT_CCV_CODE' => 'Código de validación de tarjeta de crédito',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => '¿Qué es el código de validación de tarjeta de crédito?',
	'VM_CHECKOUT_MD5_FAILED' => 'Verifiación MD5 fallida',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'No se encuentra el pedido',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'El pago es
creado por %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>