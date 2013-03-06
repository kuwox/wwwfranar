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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Rexistro do Pago',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Prezos do Envío',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Código do Estado do Pedido',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Nome do Estado do Pedido',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Estado do Pedido',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Código de Estado do Pedido',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Nome do Estado do Pedido',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Listar Pedidos',
	'PHPSHOP_COMMENT' => 'Comentario',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Notificar Cliente?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Por favor, edite primeiro o estado do pedido!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Incluir este comentario?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Engadir data',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Cliente notificado?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Cambiar Estado Pedido',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Imprimir Etiqueta',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Etiqueta Nula',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Track',
	'VM_DOWNLOAD_STATS' => 'Estadísticas de Descarga',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'Sen Descargas Restantes',
	'VM_DOWNLOAD_REENABLE' => 'Reiniciar Descarga',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Descargas Restantes',
	'VM_DOWNLOAD_RESEND_ID' => 'Reenviar Código de Descarga',
	'VM_EXPIRY' => 'Caducidade',
	'VM_UPDATE_STATUS' => 'Atualizar estado',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Por favor Introduza un código de descarga válido, non "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Pedido non encontrado na nosa base de dados.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiqueta ainda non foi xerada',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Clase {ship_class} non pode obter imaxes, porque estamos aqui?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Etiqueta de Envio',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Firma nunca foi recuperada',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Track',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Etiqueta Nula',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Etiqueta de albarán {tracking_number} foi anulada.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'Dirección-IP',
	'VM_ORDER_STATUS_ICON_ALT' => 'Icono de Estado',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'Código CVV',
	'VM_ORDER_NOTFOUND' => 'Pedido non encontrado! Puido ser eliminada.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Accións',
	'PHPSHOP_ORDER_EDIT' => 'Cambiar detalle Pedido',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Engadir',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Engadir Producto',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Cambiar Pedido',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'A Cantidade debe ser maior que 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'O Producto foi engadido ao Pedido',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'O Producto foi eliminado do Pedido',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'A Cantidade foi actualizada',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'voltar o Producto Base',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Seleccionar Producto',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Cambiar enderezo da Factura',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Cambiar enderezo do Destino',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' foi actualizado',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Seleccionar SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
