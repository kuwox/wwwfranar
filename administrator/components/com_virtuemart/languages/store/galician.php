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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Nome',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Apelido 2',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Apelido 1',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Empresa',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Enderezo 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Enderezo 2',
	'PHPSHOP_USER_FORM_CITY' => 'Cidade',
	'PHPSHOP_USER_FORM_STATE' => 'Provincia',
	'PHPSHOP_USER_FORM_ZIP' => 'Código Postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'País',
	'PHPSHOP_USER_FORM_PHONE' => 'Teléfono',
	'PHPSHOP_USER_FORM_PHONE2' => 'Teléfono móbil',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Activo',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurar Método de Envio',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Imaxe Completa',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Subir Imaxe',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nome da Tenda',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nome da Empresa',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Enderezo 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Enderezo 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Cidade',
	'PHPSHOP_STORE_FORM_STATE' => 'Provincia',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'País',
	'PHPSHOP_STORE_FORM_ZIP' => 'Código Postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Apelido 2',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Nome',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Apelido 1',
	'PHPSHOP_STORE_FORM_TITLE' => 'Título',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Teléfono 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Teléfono 1',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descripción',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista de Métodos de Pago',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nome',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Código',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Modo de Pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulario Método de Pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nome Método de Pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Desconto',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Código',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Listar Pedidos',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Método de Pago',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Tarxeta de Crédito',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Usar procesador de Pago',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Débito Bancario',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Pago contrareembolso',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Estadísticas',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clientes',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Produtos Activos',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Produtos inactivos',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Novos Pedidos',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Novos Clientes',
	'PHPSHOP_CREDITCARD_NAME' => 'Nome Tarxeta de Crédito',
	'PHPSHOP_CREDITCARD_CODE' => 'Tarxeta de Crédito - Código Pequeno',
	'PHPSHOP_YOUR_STORE' => 'A Súa Tenda',
	'PHPSHOP_CONTROL_PANEL' => 'Panel de Control',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mostrar/Cambiar Contrasial/Clave de Transacción',
	'PHPSHOP_TYPE_PASSWORD' => 'Por favor escriba a súa contrasinal',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Clave de Transacción Actual',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Clave de Transacción alterada con éxito.',
	'VM_PAYMENT_CLASS_NAME' => 'Nome de Clase de Pago',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
En uso: ps_payment<br />
<i>Deixe en branco se vostede non está seguro de como proceder!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Información extra sobre o Pago',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'É mostrada na Pagina de Confirmación do Engargo. Pode ser: Código HTML do teu proveedor do Servizo de Pago, Suxerencias ó cliente, etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Tipos de Tarxetas de Crédito Aceptadas',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Para utilizar o desconto nun pago, use un valor negativo aquí (Exemplo: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Máximo desconto',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Mínimo desconto',
	'VM_PAYMENT_FORM_FORMBASED' => 'Formulario en HTML (ex. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Lista de Módulos Exportados',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nome',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Descripción',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lista de Moedas Aceptadas',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Esta lista define todas as moedas que vostede acepta cando as persoas están a comprar calquer cousa na sua tenda. <strong>Nota:</strong> Todas as moedas seleccionadas aqui poden ser usadas nas Compras! Se vostede non quere, chega con selecionar a moeda do seu país (=por defecto).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Módulo de Exportación',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Nome do Módulo de Exportación',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Descripción',
	'VM_EXPORT_CLASS_NAME' => 'Nome da Clase de Exportación',
	'VM_EXPORT_CLASS_NAME_TIP' => '(ex. <strong>ps_orders_csv</strong>) :<br /> Por Defecto: ps_xmlexport<br /> <i>Deixe en branco se vostede non ten a certeza de como proceder!</i>',
	'VM_EXPORT_CONFIG' => 'Configuración extra de Exportación',
	'VM_EXPORT_CONFIG_TIP' => 'Definir a configuración para exportación ou definir módulos adicionais de configuración. O código debe ser PHP-válido.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nome',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versión',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formato da Dirección da Tenda',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Vostede pode usar as seguintes parametros aqui',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formato da Data',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Erro: Código do método de Pago non foi facilitado.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configuración do Módulo de Envío',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Non foi posible instanciar Clase {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
