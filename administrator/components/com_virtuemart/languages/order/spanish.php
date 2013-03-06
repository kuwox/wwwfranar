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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Registro de pago',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Precio de envío',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Código de pedido',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Nombre de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Pedido',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Código de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Nombre de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Lista de pedido',
	'PHPSHOP_COMMENT' => 'Comentario',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Notificar clientes?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Por favor, cambie el estado del pedido primero!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Incluir este comentario?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Fecha agregada',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Cliente notificado?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Cambio de estado del pedido',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Etiqueta de impresión',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Etiqueta de anulado',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Rastrear',
	'VM_DOWNLOAD_STATS' => 'Estadísticas de descarga',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'No hay descargas disponibles',
	'VM_DOWNLOAD_REENABLE' => 'Rehabilitar descargas',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Descargas disponibles',
	'VM_DOWNLOAD_RESEND_ID' => 'Reenviar ID de descarga',
	'VM_EXPIRY' => 'Expira',
	'VM_UPDATE_STATUS' => 'Actualizar estado',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Por favor ingrese un ID valido, numerico, ID de pedido, no "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Registro de pedido no encontrado en etiqueta de envio de la base de datos.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiqueta no ha sido generada todavia',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Clase {ship_class} no puede traer etiquetas de imagenes, por que estamos aqui?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Etiqueta de envío',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'La firma no fué recibida',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Rastrear',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Etiqueta anulada',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Etiqueta para la guía {tracking_number} ha sido anulada.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'DIRECCION-IP',
	'VM_ORDER_STATUS_ICON_ALT' => 'Icono de estado',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'Código CVV',
	'VM_ORDER_NOTFOUND' => 'Pedido no encontrado! Puede haber sido eliminado.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Acciones',
	'PHPSHOP_ORDER_EDIT' => 'Cambiar detalle del pedido',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Agregar',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Agregar producto',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Cambiar pedido',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'la cantidad debe ser mayor a 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'El producto fue agregado a su pedido',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'El producto fue eliminado de su pedido',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'La cantidad ha siudo actualizada',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'Regreso a producto matriz',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Seleccione un producto',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Cambiar dirección Emitir comprobante de pago a',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Cambiar dirección Enviar a',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' a sido cambiada',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Seleccione SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
