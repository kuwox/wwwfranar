<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : bulgarian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator BULTRANS
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Име',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Фамилия',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Презиме',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Име на организацията',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Адрес 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Адрес 2',
	'PHPSHOP_USER_FORM_CITY' => 'Град',
	'PHPSHOP_USER_FORM_STATE' => 'Област/Район',
	'PHPSHOP_USER_FORM_ZIP' => 'Пощенски код',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Държава',
	'PHPSHOP_USER_FORM_PHONE' => 'Телефон',
	'PHPSHOP_USER_FORM_PHONE2' => 'Мобилен номер',
	'PHPSHOP_USER_FORM_FAX' => 'Факс',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Активно',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Начин за доставка',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Изображение в пълен размер',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Качване на изображение',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Име на магазина',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Собственик',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Адрес 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Адрес 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Град',
	'PHPSHOP_STORE_FORM_STATE' => 'Област/Район',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Държава',
	'PHPSHOP_STORE_FORM_ZIP' => 'Пощенски код',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Валута',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Фамилия',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Име',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Презиме',
	'PHPSHOP_STORE_FORM_TITLE' => 'Обръщение',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Телефон 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Телефон 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Описание',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Списък на начините за плащане',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Име',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Код',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Клиентска група',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Вид на начина',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Формуляр за нов начин за плащане',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Име на начина',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Клиентска група',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Отстъпка',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Код',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Подреждане',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Вид на начина',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Кредитна карта',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Използване на процесор за плащане',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Банков дебит',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Само адрес / Плащане при доставка',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Статистика',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Клиенти',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'активни продукти',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'неактивни продукти',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Нови поръчки',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Нови клиенти',
	'PHPSHOP_CREDITCARD_NAME' => 'Име на кредитна карта',
	'PHPSHOP_CREDITCARD_CODE' => 'Кредитна карта - кратък код',
	'PHPSHOP_YOUR_STORE' => 'Вашият магазин',
	'PHPSHOP_CONTROL_PANEL' => 'Контролен панел',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Показване/промяна на парола/ключ за транзакция',
	'PHPSHOP_TYPE_PASSWORD' => 'Моля, въведете парола',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Текущ ключ за транзакции',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Ключът за транзакции беше сменен успешно.',
	'VM_PAYMENT_CLASS_NAME' => 'Име на вида плащане',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
по подразбиране: ps_payment<br />
<i>Оставете празно, ако не знаете какво да попълните!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Допълнителна информация',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Показва се на страницата за порйчки.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Приемливи кредитни карти',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'За да превърнете тази отстъпка в такса, използвайте отрицателна стойност (Например: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Максимална отстъпка',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Минимална отстъпка',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-базирана форма (напр. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Експорт на поръчките',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Име',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Описание',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Списък на приетите валути',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Всички избрани валути ще могат да се използват при плащането във Вашия магазин! Ако не желаете това, изберете само една валута (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Форма за експортиране',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Име на модула за експортиране',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Описание',
	'VM_EXPORT_CLASS_NAME' => 'Име на класа',
	'VM_EXPORT_CLASS_NAME_TIP' => '(напр. <strong>ps_orders_csv</strong>) :<br /> по подразбиране: ps_xmlexport<br /> <i>Оставете празно, ако не знаете какво да напишете!</i>',
	'VM_EXPORT_CONFIG' => 'Допълнителни настройки',
	'VM_EXPORT_CONFIG_TIP' => 'Използвай тевиледен PHP код за допълнителните индивидуални или групови настройки.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Название',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Версия',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Автор',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Формат на адреса',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Може да използвате следния модел',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Формат на датата',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Грешка: Няма номер на плащането.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Настройки на модула за експедиция',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Няма примери за класа {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>