<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
* Translated by Mohammad Hosin Fazeli
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_BROWSE_LBL' => 'جستجو',
	'PHPSHOP_FLYPAGE_LBL' => 'جزئيات كالا',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'ويرايش كالا',
	'PHPSHOP_DOWNLOADS_START' => 'شروع دانلود',
	'PHPSHOP_DOWNLOADS_INFO' => 'Please enter the Download-ID you\'ve got in the e-mail and click \'شروع دانلود\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Please enter your e-mail address below to be notified when this product comes back in stock. 
		We will not share, rent, sell or use this e-mail address for any other purpose other than to 
		tell you when the product is back in stock.<br /><br />Thank you!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'به خاطر صبزتان متشكريم <br />ما سريعا پس از بررسي صورت اموال شما را مطلع خواهيم نمود',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'مرا آگاه كن',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'جستجو در تمامي مجموعه ها',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'جستجو در تمامي اطلاعات كالا ها',
	'PHPSHOP_SEARCH_PRODNAME' => 'غقط نام كالا',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'توليد كننده/فروشنده فقط',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'فقط توضيحات كالا',
	'PHPSHOP_SEARCH_AND' => 'و',
	'PHPSHOP_SEARCH_NOT' => 'نه',
	'PHPSHOP_SEARCH_TEXT1' => ' اولين ليست به شما اجازه گزينش مجموعه براي محدود نمودن جستجو را مي دهد. دومين ليست به شما اجازه گزينش در قطعه خاصي از جزئيات كالا را ميدهد. يا براي جستجو ميتوانيد كلمات كليدي خود را جستجو نماييد ',
	'PHPSHOP_SEARCH_TEXT2' => ' شما با افزودن كلماتي مانند  and  و  not  ميتوانيد جستجوي خود را بهتر نماييد. 
        انتخاب  and  يعني هر دو كلمه بايستي در توضيحات كالا موجود باشد. 
        انتخاب  not  يعني كلمه اول باد در توضيحات كالا موجود باشد و كلمه دوم نباشد.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'ادامه خريد',
	'PHPSHOP_AVAILABLE_IMAGES' => 'تصاوير موجود براي',
	'PHPSHOP_BACK_TO_DETAILS' => 'بازگشت به جزئيات كالا',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'تصوير يافت نشد!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'متاسفانه مجموعه مورد نظر شما يافت نشد.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'متاسفانه كالايي با نام مورد نظر شما در فروشگاه موجود نمي باشد',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'شبيه',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'متفاوت',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'جستجوي تمامي كلمات',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'همگي انتخاب شوند',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'انتخاب يكي',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'از نو',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'متاسفانه كالايي با نام مورد نظر شما در فروشگاه موجود نمي باشد',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'شماره واحد در بسته بندي:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'شماره واحد در جعبه:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'قيمت هر واحد',
	'VM_PRODUCT_ENQUIRY_LBL' => 'پرسيدن يك سوال درباره اين كالا',
	'VM_RECOMMEND_FORM_LBL' => 'توصيه اين كالا به دوستان',
	'PHPSHOP_EMPTY_YOUR_CART' => 'كارت خالي',
	'VM_RETURN_TO_PRODUCT' => 'بازگشت به كالا',
	'EMPTY_CATEGORY' => 'اين مجموعه فعلا خاليست',
	'ENQUIRY' => 'پرس و جو',
	'NAME_PROMPT' => 'نام خود را وارد نماييد',
	'EMAIL_PROMPT' => 'آدرس ايميل',
	'MESSAGE_PROMPT' => 'متن پيامتان را وارد نماييد',
	'SEND_BUTTON' => 'فرستادن',
	'THANK_MESSAGE' => 'با تشكر از سوال شما به زودي با شما تماس خواهيم گرفت',
	'PROMPT_CLOSE' => 'بستن',
	'VM_RECOVER_CART_REPLACE' => 'جايگزيني سبد خريد با سبد از قبل ذخيره شده',
	'VM_RECOVER_CART_MERGE' => 'افزودن سبد ذخيره شده به سبد خريد فعلي',
	'VM_RECOVER_CART_DELETE' => 'حذف سبد خريد ذخيره شده',
	'VM_EMPTY_YOUR_CART_TIP' => 'سبد خريد از تمامي كالاهاي خريداري شده پاك گردد',
	'VM_SAVED_CART_TITLE' => 'ذخيره سبد خريد',
	'VM_SAVED_CART_RETURN' => 'بازگشت'
); $VM_LANG->initModule( 'shop', $langvars );
?>