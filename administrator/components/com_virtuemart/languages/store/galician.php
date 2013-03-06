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
	'PHPSHOP_USER_FORM_ZIP' => 'C�digo Postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Pa�s',
	'PHPSHOP_USER_FORM_PHONE' => 'Tel�fono',
	'PHPSHOP_USER_FORM_PHONE2' => 'Tel�fono m�bil',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Activo',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurar M�todo de Envio',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Imaxe Completa',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Subir Imaxe',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nome da Tenda',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nome da Empresa',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Enderezo 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Enderezo 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Cidade',
	'PHPSHOP_STORE_FORM_STATE' => 'Provincia',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Pa�s',
	'PHPSHOP_STORE_FORM_ZIP' => 'C�digo Postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Apelido 2',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Nome',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Apelido 1',
	'PHPSHOP_STORE_FORM_TITLE' => 'T�tulo',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Tel�fono 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Tel�fono 1',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descripci�n',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista de M�todos de Pago',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nome',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'C�digo',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Modo de Pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulario M�todo de Pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nome M�todo de Pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Desconto',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'C�digo',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Listar Pedidos',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'M�todo de Pago',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Tarxeta de Cr�dito',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Usar procesador de Pago',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'D�bito Bancario',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Pago contrareembolso',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Estad�sticas',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clientes',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Produtos Activos',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Produtos inactivos',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Novos Pedidos',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Novos Clientes',
	'PHPSHOP_CREDITCARD_NAME' => 'Nome Tarxeta de Cr�dito',
	'PHPSHOP_CREDITCARD_CODE' => 'Tarxeta de Cr�dito - C�digo Pequeno',
	'PHPSHOP_YOUR_STORE' => 'A S�a Tenda',
	'PHPSHOP_CONTROL_PANEL' => 'Panel de Control',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mostrar/Cambiar Contrasial/Clave de Transacci�n',
	'PHPSHOP_TYPE_PASSWORD' => 'Por favor escriba a s�a contrasinal',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Clave de Transacci�n Actual',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Clave de Transacci�n alterada con �xito.',
	'VM_PAYMENT_CLASS_NAME' => 'Nome de Clase de Pago',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
En uso: ps_payment<br />
<i>Deixe en branco se vostede non est� seguro de como proceder!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Informaci�n extra sobre o Pago',
	'VM_PAYMENT_EXTRAINFO_TIP' => '� mostrada na Pagina de Confirmaci�n do Engargo. Pode ser: C�digo HTML do teu proveedor do Servizo de Pago, Suxerencias � cliente, etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Tipos de Tarxetas de Cr�dito Aceptadas',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Para utilizar o desconto nun pago, use un valor negativo aqu� (Exemplo: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'M�ximo desconto',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'M�nimo desconto',
	'VM_PAYMENT_FORM_FORMBASED' => 'Formulario en HTML (ex. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Lista de M�dulos Exportados',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nome',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Descripci�n',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lista de Moedas Aceptadas',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Esta lista define todas as moedas que vostede acepta cando as persoas est�n a comprar calquer cousa na sua tenda. <strong>Nota:</strong> Todas as moedas seleccionadas aqui poden ser usadas nas Compras! Se vostede non quere, chega con selecionar a moeda do seu pa�s (=por defecto).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'M�dulo de Exportaci�n',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Nome do M�dulo de Exportaci�n',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Descripci�n',
	'VM_EXPORT_CLASS_NAME' => 'Nome da Clase de Exportaci�n',
	'VM_EXPORT_CLASS_NAME_TIP' => '(ex. <strong>ps_orders_csv</strong>) :<br /> Por Defecto: ps_xmlexport<br /> <i>Deixe en branco se vostede non ten a certeza de como proceder!</i>',
	'VM_EXPORT_CONFIG' => 'Configuraci�n extra de Exportaci�n',
	'VM_EXPORT_CONFIG_TIP' => 'Definir a configuraci�n para exportaci�n ou definir m�dulos adicionais de configuraci�n. O c�digo debe ser PHP-v�lido.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nome',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versi�n',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formato da Direcci�n da Tenda',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Vostede pode usar as seguintes parametros aqui',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formato da Data',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Erro: C�digo do m�todo de Pago non foi facilitado.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configuraci�n do M�dulo de Env�o',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Non foi posible instanciar Clase {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
