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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_BROWSE_LBL' => 'Browse',
	'PHPSHOP_FLYPAGE_LBL' => 'Xem chi tiết',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Sửa sản phẩm này',
	'PHPSHOP_DOWNLOADS_START' => 'Start Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Please enter the Download-ID you\'ve got in the e-mail and click \'Start Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Please enter your e-mail address below to be notified when this sản phẩm comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address cho any other purpose other than to 
                                        tell you when the sản phẩm is back in stock.<br /><br />Thank you!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Thanks cho waiting! <br />We will let you know as soon as we get our inventory.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Notify Me!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Tất cả Categories',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Tìm kiếm tất cả thông tin',
	'PHPSHOP_SEARCH_PRODNAME' => 'Tên Sản phẩm',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Nhà sản xuất/Người bán hàng',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Mô tả sản phẩm',
	'PHPSHOP_SEARCH_AND' => 'and',
	'PHPSHOP_SEARCH_NOT' => 'not',
	'PHPSHOP_SEARCH_TEXT1' => 'Dùng drop-down-list cho phép bạn chọn category để giới hạn kết quả tìm. Drop-down-list thứ hai cho phép bạn tìm các thông tin như tên hay mô tả sản phẩm,... ',
	'PHPSHOP_SEARCH_TEXT2' => ' Dùng toán tử AND hoặc NOT để lọc lấy kết quả chính xác hơn. Dùng AND thì cả hai từ khóa sẽ xuất hiện trong kết quả, dùng NOT thì từ khóa thứ nhất sẽ xuất hiện trong kết quả, từ khóa thứ 2 sẽ không xuất hiện. ',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Tiếp tục mua hàng',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Available Images cho',
	'PHPSHOP_BACK_TO_DETAILS' => 'Back to Sản phẩm Details',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Image not found!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'I am sorry. There is no category cho search.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'I am sorry. There is no published Sản phẩm Type with this name.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Full-Text Tìm kiếm',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Tất cả Selected',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Any Selected',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Reset Form',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Sorry, but the Sản phẩm you\'ve requested wasn\'t found!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Number {unit}s in packaging:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Number {unit}s in box:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Giá per Unit',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ask a question about this product',
	'VM_RECOMMEND_FORM_LBL' => 'Recommend this product to a friend',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Return to product',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Enter your Name',
	'EMAIL_PROMPT' => 'E-mail Address',
	'MESSAGE_PROMPT' => 'Enter your Message',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Thank you for your Enquiry. We will contact you as soon as possible.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>