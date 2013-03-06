<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_USER_LIST_LBL' => 'Списък на потребителите',
	'PHPSHOP_USER_LIST_USERNAME' => 'Потребителско име',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Име',
	'PHPSHOP_USER_LIST_GROUP' => 'Група',
	'PHPSHOP_USER_FORM_LBL' => 'Добавяне/Промяна на информация за потребител',
	'PHPSHOP_USER_FORM_PERMS' => 'Права',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Номер/ID на клиент',
	'PHPSHOP_MODULE_LIST_LBL' => 'Списък на модулите',
	'PHPSHOP_MODULE_LIST_NAME' => 'Име на модула',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Права',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Функции',
	'PHPSHOP_MODULE_FORM_LBL' => 'Информация за модул',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Етикет на модула (за Главното меню)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Име на модул',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Кой има достъп?',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Header на модула',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Footer на модула',
	'PHPSHOP_MODULE_FORM_MENU' => 'Показване на модула в администраторското меню?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Ред за показване',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Описание на модула',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Код на езика',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Езиков файл',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Списък на функциите',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Име на функция',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Име на класа',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Метод на класа',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Права',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Информация за функция',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Име на функция',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Име на класа',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Метод на класа',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Права на функция',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Описание на функцията',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Списък на валутите',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Име на валута',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Код на валута',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Списък на държавите',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Име на държава',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Код на държава (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Код на държава (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Списък на областите',
	'PHPSHOP_STATE_LIST_LBL' => 'Списък на областите за: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Добавяне/Промяна на област',
	'PHPSHOP_STATE_LIST_NAME' => 'Име на област',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Код на област (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Код на област (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Общи',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Сайт',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Доставка',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Поръчка и плащане',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Сваляне',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Използване само като каталог',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Ако изберете тази опция, всички търговски функции на магазина (поръчка, количка, плащане) се изключват.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Показване на цени',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Изберете, за да се виждат цените. Ако системата се ползва само като каталог, може да изключите тази функция, за да се скрият цените.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Виртуална данъчна система',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Това определя дали артикули с нулево тегло (напр. софтуер) подлежат на облагане с данък. Редактирайте ps_checkout.php->calc_order_taxable(), за да настроите тази функция.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Данъчен режим:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Според адреса за доставка (на клента)',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Според адреса на дистрибутора (на магазина)',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Тук се определя данъчния режим на магазина. Дали според:<br />
                                                <ul><li>данъчния режим на купувача или</li><br/>
                                                <li>данъчния режим на продавача.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Различни данъчни проценти?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Изберете, ако предлагате продукти, които се облагат с различен данък (напр., 7% за книги и храна, 16% за други)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Изваждане на отстъпката преди начисляване на данък/доставка?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Включване на системата за потебителски коментар и оценка',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Ако е избрано, потебителите могат да <strong>оценяват</strong> продуктите и да <strong>оставят коментар</strong>.<br />
                                                                                По този начин, потребителите споделят своя опит със съответния продукт на други потребители.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Изберете, за да определите дали отстъпката ще се изважда ПРЕДИ (избрано) или СЛЕД начисляването на данъка или такса доставка.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Задължително приемане на Условията за ползване?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Изберете, ако желаете потребителите да се съгласяват с Вашите условия за ползване на магазина преди регистрация.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Проверка на наличност?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Ако е избрано, всеки път, когато потребител добавя артикул в количката, системата проверява в склада за наличност. Ако е избрано, системата няма да позволи на потребителя да сложи повече бройки от определен артикул, ако липсват такива в склада.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Включване на партньорската (affiliate) програма?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Това зарежда проследяването на партньори във frontend-a на магазина. Изберете, ако сте добавили партньори в backend-а. ВНИМАНИЕ: Тази функция не е развита напълно!',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Формат на е-mail с поръчката:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Text',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Това определя как са форматирани съобщенията за потвърждение на поръчка:<br />
                                                                                        <ul><li>като чист текст или</li>
                                                                                        <li>като html с красоти и картинки.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Позволяване на администрация от Frontend-а за потребители, които нямат достъп до Backend-а?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'С тази опция може да позволите на потребители, които нямат достъп до Backend-a на Mambo (но са администратори на магазина - storeadmins), да администрират магазина във Frontend (напр., Registered или Editor и т.н.).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'Криптирания път (secure URL) до вашия сайт. (https - не забравяйте наклонената черта в края!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Тази страница ще се зарежда по подразбиране.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Тази страница показва съобщения за грешка по подразбиране.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG? Включва изход за debug. DEBUGPAGE страницата се показва най-долу на всяка страница. Много полезна опция за development на магазина - показва съдържанието на количката, стойностите от формите и т.н.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Тази страница показва подробна информация за продукта по подразбиране.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Шаблон (template) за показване на категория',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Тук се определя шаблонът, който по подразбиране ще показва съдържанието на дадена категория. Можете да създавате нови шаблони като променяте съществуващите шаблонни файлове, които се намират в <strong>COMPONENTPATH/html/templates/</strong> директорията и имената им започват с browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Брой на продукти на ред по подразбиране',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Тук се определя броят на показваните продукти в един ред. Пример: Ако зададете 4, шаблонът за показване на категория ще покаже 4 продукта на ред.',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => 'Изображение "няма изображение"',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Това изображение ще се показва, когато за даден продукт липсва изображение.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Показване на footer',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Показва картинка с powered-by-VirtueMart в края на всяка страница.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Стандартен модул за доставка с доставчици и такси, които се настройват индивидуално. <strong>ПРЕПОРЪЧВА СЕ!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => 'Модул за доставки според зоната за страна ver. 1.0<br />За повече информация: <a href="http://ZephWare.com">http://ZephWare.com</a><br />За контакти: <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br />Изберете, за да заредите този модул.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Изключване на избора за начин за доставка. Изберете това, ако предлагате само продукти, които не изискват доставка (напр. софтуер).',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Включване на графичната лента при плащане',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Изберете това, ако желаете графичната лента да се показва на потребителя докато трае процеса на плащане ( 1 - 2 - 3 - 4 с изображения).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Изберете процес за плащане',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Включване на функцията ТЕГЛЕНЕ НА ФАЙЛОВЕ',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Изберете, за да включите възможността за теглене на файлове. Само ако продавате продукти, които се теглят онлайн (напр. софтуер).',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Статус на поръчката, който позволява теглене',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Изберете статус на поръчката, при който купувачът бива уведомен с e-mail, че може да изтегли продукта.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Статус на поръчката, който забранява теглене',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Изберете статус на поръчката, при който тегленето е забранено.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'Физическия път до файловете за теглене. (не забравяйте наклонената черта в края!)<br>
        <span class="message">ВНИМАНИЕ: От съображения за сигурност, ако имте възможност, моля, използвайте директория ИЗВЪН WEBROOT!</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Максимум изтеления',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Максималния брой тегления, които могат да се маправят с едно Download-ID, (за една поръчка)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Време за теглене',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Задава времето <strong>в секунди</strong>, през което потребителят може да изтегли продукта определения по-горе брой пъти. 
  Броячът започва да работи след ПЪРВОТО изтегляне! Когато времето свърши, download-ID-то спира да важи. Бележка: 86400 секунди = 24 часа.',
	'PHPSHOP_COUPONS' => 'Талони',
	'PHPSHOP_COUPONS_ENABLE' => 'Включване на талони за отстъпка',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Ако активирате използването на талони за отстъпка, ще позволите на клиентите си да попълват код от талон, за да получават отстъпка при техните покупки.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF-Бутон',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Скрива/показва PDF-бутона за магазина',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Задължително показване на Условията за ползване и съгласяване с тях за ВСЯКА поръчка?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Изберете, ако желаете клиентът да се съгласява с Вашите условия за ползване преди ВСЯКА поръчка.',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Показване на продукти, които не са налични на склад',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Когато е избрано, биват показвани продукти, които понастоящем са изчерпани от склада. В противен случай, тези продукти остават скрити.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Изключване на магазина?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Ако е избрано, магазинът се изключва и показва съответното съобщение.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Съобщение за изключен магазин',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Префикс за таблиците (Table Prefix) в базата данни на магазина.',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'По подразбиране е <strong>vm</strong>!',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Показване на навигация върху страницата на продуктите?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Включва/изключва показването на линкове за навигация върху страницата на продуктите във Frontend-a.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Показване броя на продуктите в категория?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Показване на броя на продуктите в списъка с категории. Например: Книги (5).',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Включване на динамично оразмеряване на изображенията?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Ако е избрано, се активира динамичното оразмеряване на изображенията. Това означава, че всички изображения са оразмеряват според размерите, които посочите по-долу, с помощта на GD2 функциите на PHP. (Можете да проверите дали системата Ви подържа GD2 като отидете до System->System Info->PHP Info->gd). С помощта на този метод умалените изображения придобиват по-добро качество от простото им "оразмеряване" в браузъра. Генерираните изображения се запазват в директорията /shop_image/prduct/resized. Ако дадено изображение вече е било оразмерено преди, файл от тази директория се изпраща до браузъра. Така се спестява безкрайното оразмеряване на едно и също изображение.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Ширина на умаленото изображение',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'Желаната <strong>ширина</strong> на умаленото изображение.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Височина на умаленото изображение',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'Желаната <strong>височина</strong> на умаленото изображение.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Моля, изберете поне един начин за доставка!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Настройки на цените',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Група, която да вижда цените',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'Избраната група и всички групи с по-големи права ще виждат цените на продуктите.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Показване на "(С XX% ДДС)"?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Когато е избрано, потребителите ще виждат "(С xx% ДДС)" при показване на цените с вкл. данъци.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Показване цената за опаковане?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Когато е избрано, тази цена се образува от стойностите за единица и пакетиране на продукта:<br/><strong>Цена за пакет (10 артикула)</strong><br/>Когато не е избрано, цената изглежда по нормалния начин: <strong>Цена: xx.xx лв.</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'Още настройки на ядрото',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Настройки на ядрото',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Характеристики на Frontend-а',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Настройка такси',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Настройки за регистрация на потербител',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Разрешена регистрация на потебител?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Задължителна активация на нов акаунт?',
	'VM_FIELDMANAGER_NAME' => 'Име на полето',
	'VM_FIELDMANAGER_TITLE' => 'Название на полето',
	'VM_FIELDMANAGER_TYPE' => 'Тип на полето',
	'VM_FIELDMANAGER_REQUIRED' => 'Задължително',
	'VM_FIELDMANAGER_PUBLISHED' => 'Публикувано',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Покажи в регистрационната форма',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Покажи в профила',
	'VM_USERFIELD_FORM_LBL' => 'Добави потр. полета',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Подредба по подразбиране',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Defines by which field products are ordered by default on the browse pages',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Налични полета за сортиране',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Изберете полета за сортиране от списъка. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Да избягвам ли връзката по https?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'When checked, the shopper is redirected to the <strong>http</strong> URL when not browsing in those shop areas, which are forced to use https.',
	'VM_MODULES_FORCE_HTTPS' => 'Области, които трябва да използват https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Here you can use a comma-separated list of shop core modules (See "Admin" => "List Modules"), which will be using https connections.',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Да покажа ли Запомни ме при влизане?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'When checked, the "remember me" box is shown on checkout. Not recommended when using shared ssl, because the customer could choose not to get a user cookie -  but that user cookie is required to keep the user logged in on both domains.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Минимална дължина',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'This is the amount of characters that MUST at least be written by a customer before the review can be submitted.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Максимална дължина',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'This is the maximum amount of characters that can be written by a customer in a comment.
',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Препоръчай на приятел?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'When enabled, a small link is displayed that allows the customer to send a recommendation email for a specific product.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Отпечатване?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'When enabled, a small link is displayed that opens the current page in a new popup for printing it out.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Автоматично публикуване на отзиви?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'If checked, reviews are automatically published after being posted. If not, the administrator must approve/publish them.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Глобални настройки за прокси сървър',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL of the proxy server',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Example: <strong>http://10.42.21.1</strong>.<br />
Leave empty if you\'re not sure.</strong> This value will be used to connect to the internet from the shop server (e.g. when fetching shipping rates from UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Proxy Port',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'The port used for communication with the proxy server (mostly <b>80</b> or <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Proxy username',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'If the proxy requires authentication please fill in your username here.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Proxy password',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'If the proxy requires authentication please fill in the correct password here.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Да показвам ли "Условия за връщане" на страницата за потвърждаване на поръчката?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'В повечето европейски страни притежателите на онлайн магазини са задължени от закона да уведомяват купувачите за условията за връщане на продукта. So this should be enabled in most cases.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Правна информация (кратък текст).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Връзка към пълната версия на Условията за връщане.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Напишете отделна статия за условията за връщане на продукта, публикувайте я в Джумла и дайте линк към нея.',
	'VM_SELECT_THEME' => 'Изберете тема за Вашия магазин',
	'VM_SELECT_THEME_TIP' => 'Themes allow styling and customizing your shop. <br />If no other themes than the "default" one are present you haven\'t installed more themes.',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Активиране на приставки в описанието?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'If enabled, product and category descriptions are parsed by all published content mambots/plugins.',
	'VM_CFG_CURRENCY_MODULE' => 'Изберете конвертор на валутата',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'This allows you to select a certain currency converter module. Such modules fetch exchange rates from a server and convert one currency into another.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'Данъци тип Европейски Съюз',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Не променяй количеството на стоката след покупка.',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'Това се отнася главно за сваляни файлове, които очевидно не могат да бъдат изчерпани.',
	'VM_USERGROUP_FORM_LBL' => 'Добави потр. група',
	'VM_USERGROUP_NAME' => 'Име на потр. група',
	'VM_USERGROUP_LEVEL' => 'Ниво на потр. група',
	'VM_USERGROUP_LEVEL_TIP' => 'Внимание! По-голямо число означава по-малко права. The <b>admin</b> group is <em>level 0</em>, storeadmin is level 250, users are level 500.',
	'VM_USERGROUP_LIST_LBL' => 'Списък на потр. групи',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Проверка на бисквитките?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'If enabled, VirtueMart checks wether the browser of the customer accepts cookies or not. This is user-friendly, but it can have negative consequences on the Search-Engine-Friendlyness of your shop.',
	'VM_CFG_REGISTRATION_TYPE' => 'Тип регистрация',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Choose the type of User Registration for your store!<br />
<strong>Нормална регистрация</strong><br />
This is the standard registration type where the customer must register and choose an username and password<br /><br />
<strong>Тихомълком</strong><br />
Silent Registration means the customer doesn\'t need to choose username and password, but those are created automatically during registration and sent to the provided email address.
<br /><br />
<strong>Регистрация по желание</strong><br />
Opotional Registration let\'s the customer choose wether he/she wants to create an account or not. If the customer wants to create an account, a username and password must be chosen.
<br /><br />
<strong>Без регистрация</strong><br />
Customers don\'t need to and are not able to register in this type of registration.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Нормална регистрация',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Тихомълком',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'По желание',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'Без регистрация',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'RSS настройки',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Активирай RSS каналите',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'Ако са активирани, клиентите могат да се абонират за RSS емисиите от сайта по категории или за целия магазин.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Настройки за кеша',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Активирай кеша',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Време на щеширане (в секунди)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Caching speeds up the feed delivery and reduces the server load, because the feed is only created once and saved to a file.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Включи цената в описанието',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'Цената на продукта ще бъде добавена към описанието на продукта.',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Включи опсиание на продукта',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'If enabled, the Product Description will be added to the feed item',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Включи снимките',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'If enabled, the thumb images will be included with the feed item.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Тип описание на продукта',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Choose the type of product description that will be included with the feed.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Ограничаване на описанието?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Максимална дължина',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'This is the maximum length of the product description for each feed item.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Име на емисията (the placeholder {storename} holds the name of your store)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Название на категорията емисии (\'{catname}\' is the placeholder for the category name, {storename} holds the name of your store)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Име на емисията',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Емисии по категории',
	'VM_ADMIN_SECURITY' => 'Сигурност',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Настройки сигурност',
	'VM_CFG_ENABLE_FEATURE' => 'Активирай',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Тук управлявате стъпките за поръчване и плащане на продукта. Може да покажете повече стъпки на една страница, като им дадете един и същи номер.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Плаващи цени за доставка. Fixed shipping cost to set base value of order with percentage of total sale above base value',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Доставка според общата сума на поръчката. Fixed shipping costs based on values entered in configuration.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Покажи на крачка: %s от процеса на поръчване.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Код за шифроване',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Used to safely store and retrieve sensible data (like credit card information) encrypted in the database.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Да съхранявам ли информацията за кредитните карти?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart stores the Credit Card Information of Customers encrypted in the database. This is done even if the Credit Card Information is processed by an external  server. <strong>If you don\'t need to process Credit Card Information manually after the order has been placed, you should turn this option off.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'само URL',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Хипертекст и URL',
	'VM_FIELDS_TEXTFIELD' => 'Текстово поле',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Check Box (Single)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Check Box (Muliple)',
	'VM_FIELDS_DATE' => 'Дата',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Падащо меню (Single Select)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Падащо меню (Multi-Select)',
	'VM_FIELDS_EMAIL' => 'Email адрес',
	'VM_FIELDS_EUVATID' => 'EU ДДС №',
	'VM_FIELDS_EDITORAREA' => 'Текстова област за редактиране',
	'VM_FIELDS_TEXTAREA' => 'Текстова област',
	'VM_FIELDS_RADIOBUTTON' => 'Радиобутони',
	'VM_FIELDS_WEBADDRESS' => 'Уеб адрес',
	'VM_FIELDS_DELIMITER' => '=== Fieldset delimiter ===',
	'VM_FIELDS_NEWSLETTER' => 'Абонамент',
	'VM_USERFIELDS_READONLY' => 'Само за четене',
	'VM_USERFIELDS_SIZE' => 'Големина на полето',
	'VM_USERFIELDS_MAXLENGTH' => 'Макс. дължина',
	'VM_USERFIELDS_DESCRIPTION' => 'Описание: само текст или HTML',
	'VM_USERFIELDS_COLUMNS' => 'Колони',
	'VM_USERFIELDS_ROWS' => 'Редове',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Премести клиента в следната група след предоставяне на валидна ДДС легистрация',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Използвайте таблицата за добавяне на нови стойности.',
	'VM_ADMIN_CFG_DISPLAY' => 'Показване',
	'VM_ADMIN_CFG_LAYOUT' => 'Вид',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Настройки на темата',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Параметри',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Шифроване',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Here you can select the encryption function used to encrypt sensible information before being stored in the database. AES_ENCRYPT is recommended, because it is very secure. ENCODE doesn\'t provide real encryption.',
	'SAVE_PERMISSIONS' => 'Съхрани правата',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'Няма конфигурационен файл за този шаблон. Configuration is not possible',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'Темата "{theme}" не съществува.',
	'VM_USERFIELDS_ADDVALUE' => 'Добави стойност',
	'VM_USERFIELDS_TITLE' => 'Название',
	'VM_USERFIELDS_VALUE' => 'Стойност',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Никога',
	'VM_USER_FORM_TAB_GENERALINFO' => 'Обща информация за клиента',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'Данни за клиента',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Параметри',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Информация за връзка',
	'VM_USER_FORM_NAME' => 'Име',
	'VM_USER_FORM_USERNAME' => 'Потр. име',
	'VM_USER_FORM_EMAIL' => 'Email',
	'VM_USER_FORM_NEWPASSWORD' => 'Нова парола',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Потвърди паролата',
	'VM_USER_FORM_GROUP' => 'Група',
	'VM_USER_FORM_BLOCKUSER' => 'Блокирай потребителя',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Получаване на системни писма',
	'VM_USER_FORM_REGISTERDATE' => 'Дата на регистриране',
	'VM_USER_FORM_LASTVISITDATE' => 'Последно посещение',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'Няма данни за връзка с този посетител:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'Виж \'Components -> Contact -> Manage Contacts\' for details.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Име',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Длъжност',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Телефон',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Промени данните',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Настройки на регистрите',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Активиране на дневниците?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'If disabled, a "null" logger will be instantiated instead, so that the vmFileLogger can still be invoked without error.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Име на дневника',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Път до дневника. Must be reachable and writeable.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Ниво на запис',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Съобщения над този праг ще бъдат игнорирани.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'Съвет - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'Дебъг - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'Инфо - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'Бележки - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'Предупреждения - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'Грешки - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'Критични - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'Сигнали - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'Спешно - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Формат на дневника',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Format for individual logfile line entries.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Logfile format fields can include any of the following: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Нямам достъ до дневника.  Please contact the system or website administrator.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'Активирай Показване на грешки?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Ограничи по IP address?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Limit debugging output to a specific client IP address?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'IP address на клиента',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'If you enable this option and enter an IP address here, then debug output will be enabled ONLY for this client IP address.  Other clients will not see the debugging output.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Покажи в товарителницата',
	'VM_USER_NOSHIPPINGADDR' => 'Няма адрес на получателя.',
	'VM_UPDATE_CHECK_LBL' => 'VirtueMart Обновяване',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'VirtueMart версия тук',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Последна версия на VirtueMart',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Порвери сега!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Свали обновлението',
	'VM_UPDATE_CHECK_CHECKING' => 'Проверявам...',
	'VM_UPDATE_CHECK_CHECK' => 'Проверка',
	'VM_UPDATE_NOTDOWNLOADED' => 'Пакетът не може да бъде свален.',
	'VM_UPDATE_PREVIEW_LBL' => 'Преглед на VirtueMart обновлението',
	'VM_UPDATE_WARNING_TITLE' => 'Общо предупреждение',
	'VM_UPDATE_WARNING_TEXT' => 'Инсталирането на обновление или кръпка може да разруши Вашата инсталация. The Patching Process will overwrite all the files listed below - it won\'t just apply smaller changes (diff), but replace the existing file with the new one. If you have modified VirtueMart files on your own, this can lead to inconsistent files and missing class/function dependencies.',
	'VM_UPDATE_PATCH_DETAILS' => 'Подробности',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Описание',
	'VM_UPDATE_PATCH_DATE' => 'Дата',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'Файлове за обновяване',
	'VM_UPDATE_PATCH_STATUS' => 'Статус',
	'VM_UPDATE_PATCH_WRITABLE' => 'Разрешен за писане',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'Не е разрешен за писане',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Заявки към база данните',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'Видях <a href="#warning">Предупреждението</a> и искам да приложа обновлението сега.',
	'VM_UPDATE_PATCH_APPLY' => 'Приложи обновлението',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'Дайте права за запис на указаните файлове и директории.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Отметнете квадратчето, преди да приложите обновлението.',
	'VM_UPDATE_RESULT_TITLE' => 'Инсталирана версия',
	'VM_FIELDS_CAPTCHA' => 'Captcha поле (използвайте com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Проверка на актуалността (Date Select Fields)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Определете минимална възраст на обновлението'
); $VM_LANG->initModule( 'admin', $langvars );
?>