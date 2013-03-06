<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : spanish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Primer nombre',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Apellidos',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Segundo nombre',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Raz�n social',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Direcci�n 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Direcci�n 2',
	'PHPSHOP_USER_FORM_CITY' => 'Ciudad',
	'PHPSHOP_USER_FORM_STATE' => 'Estado/Provincia',
	'PHPSHOP_USER_FORM_ZIP' => 'Codigo postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Pa�s',
	'PHPSHOP_USER_FORM_PHONE' => 'Tel�fono',
	'PHPSHOP_USER_FORM_PHONE2' => 'Celular',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Activo',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurar m�todo de env�o',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Imagen completa',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Subir imagen',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nombre de tienda',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nombre de tienda comercial',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Direcci�n 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Direcci�n 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Ciudad',
	'PHPSHOP_STORE_FORM_STATE' => 'Estado/Provincia',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Pa�s',
	'PHPSHOP_STORE_FORM_ZIP' => 'Codigo postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Moneda',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Apellidos',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Primer nombre',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Segundo nombre',
	'PHPSHOP_STORE_FORM_TITLE' => 'T�tulo',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Tel�fono 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Tel�fono 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descripci�n',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista de formas de pago',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nombre',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'C�digo',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grupo de comprador',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Tipo de forma de pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulario de forma de pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nombre de forma de pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grupo de comprador',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Descuento',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'C�digo',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Lista de pedido',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Tipo de forma de pago',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Tarjeta de cr�dito',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Use el procesador de pagos',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'D�bito Bancario',
	'PHPSHOP_PAYMENT_FORM_AO' => 'S�lo Direcci�n / Pago contra entrega',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Estad�sticas',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clientes',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Productos activos',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Productos inactivos',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nuevos pedidos',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nuevos clientes',
	'PHPSHOP_CREDITCARD_NAME' => 'Nombre de tarjeta de cr�dito',
	'PHPSHOP_CREDITCARD_CODE' => 'Tarjeta de cr�dito - C�gigo corto (alias)',
	'PHPSHOP_YOUR_STORE' => 'Su tienda',
	'PHPSHOP_CONTROL_PANEL' => 'Panel de control',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mostrar/Cambiar la contrase�a/C�digo de transacci�n',
	'PHPSHOP_TYPE_PASSWORD' => 'Por favor, digite su contrase�a de usuario',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'C�digo de transacci�n actual',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Se ha cambiado su c�digo de transacci�n con �xito.',
	'VM_PAYMENT_CLASS_NAME' => 'Nombre de clase de pago',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.j. <strong>ps_netbanx</strong>) :<br />
		predeterminado: ps_payment<br />
<i>Deje en blanco si no sabe que poner!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Info extra de pago',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Es mostrada en la confirmaci�n de la orden de pago. Puede ser: Ayuda al cliente, etc',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Tipos de tarjeta de cr�dito aceptadas',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Para convertir el descuento en un sobrecargo, usa un valor negativo (Ejemplo: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Monto de descuento m�ximo',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Monto de descuento m�nimo',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.j. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Lista de m�dulo de exportaci�n de pedido',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nombre',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Descripci�n',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lista de monedas aceptadas',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Esta lista define todos los tipos de monedas aceptadas cuando las personas compran en su tienda. <strong>Nota:</strong> Todas las monedas seleccionadas aqui pueden ser usadas en la compra! Si no lo desea, seleccione el tipo de moneda de su pa�s (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Formulario de m�dulo de exportaci�n',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Nombre de m�dulo de exportaci�n',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Descripci�n',
	'VM_EXPORT_CLASS_NAME' => 'Nombre de clase de eportaci�n',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.j. <strong>ps_orders_csv</strong>) :<br /> predeterminado: ps_xmlexport<br /> <i>Deje en blanco si no sabe que llenar!</i>',
	'VM_EXPORT_CONFIG' => 'Configuraci�n extra de exportaci�n',
	'VM_EXPORT_CONFIG_TIP' => 'Defina la configuraci�n de exportaci�n para definici�n-usuario o configuraci�n adicional. El codigo debe ser PHP v�lido.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nombre',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versi�n',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formato de direcci�n de tienda',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Puede usar los siguientes localizadores aqui',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formato de fecha de tienda',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: ID de forma de pago no fue proveido.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configuraci�n de m�dulo de envio',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'No se pudo iniciar clase {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
