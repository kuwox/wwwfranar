<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator  Akarawuth Tamrareang  http://www.joomlacorner.com
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
	'PHPSHOP_MODULE_LIST_ORDER' => 'เรียงลำดับ',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'สินค้าคงคลัง',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'จำนวน',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'น้ำหนัก',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'เผยแพร่',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'ค้นหาสินค้า',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'ปรับปรุง',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'กับราคาที่ปรับปรุง',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'ไม่มีราคา',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'หลัง',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'ก่อน',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'แสดงสินค้า',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'สินค้าใหม่',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'รายละเอียดสินค้า',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'สถานะสินค้า',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'ขนาดและน้ำหนัก',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'ภาพถ่ายสินค้า',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'ปรับปรุงรายการ',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'รายละเอียด',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'สถานะ',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'ขนาดและน้ำหนัก',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'รูปภาพ',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'ต้องการเปลี่ยนแปลงรูปภาพ เลือกภาพใหม่',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'พิมพ์ ',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'รายการสินค้า',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'คุณลักษณะ',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'ต้องการลบสินค้า nและรายละเอียดที่เกี่ยวข้องกับสินค้านี้?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'ต้องการลบรายการนี้หรือไม่?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'โรงงาน',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'รหัสสินค้า',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'ชื่อ',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'หมวดสินค้า',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'วันที่มีสินค้า',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'รายการพิเศษ',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'ประเภทส่วนลด',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'เผยแพร่?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'ยาว',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'กว้าง',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'สูง',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'หน่วยนับ',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'หน่วยนับ',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'รูปภาพ',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'ปอนด์',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'นิ้ว',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'หน่วยในรูปแบบของแพคเกจ',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'คุณสามารถใส่หน่วยตัวเลขในแพคเกจ. (เต็มที่ใส่ได้. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'หน่วยในกล่อง',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'คุณสามารถใส่หน่วยตัวเลขในกล่อง. (เต็มที่ใส่ได้. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'ผลการเพิ่มสินค้า',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'ผลการปรับปรุงสินค้า',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'ผลการเพิ่มรายการ',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'ผลการปรับปรุงรายการ',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'รายละเอียด',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'ชื่อหมวด',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'หมวดหลัก',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'รายละเอียด',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'เผยแพร่?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'หน้าต่างแสดงหมวดสินค้า',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'คุณลักษณะ',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'คุณลักษณะ',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'เรียงลำดับ',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'แบบฟอร์มคุณลักษณะ',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'เพิ่มคุณลักษณะใหม่สำหรับสินค้า',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'ปรับปรุงคุณลักษณะสินค้า',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'เพิ่มรายการคุณลักษณะใหม่',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'ปรับปรุงรายการคุณลักษณะ',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'ชื่อคุณลักษณะ',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'เรียงลำดับ',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'ราคาสำหรับ',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'ชื่อหมวด',
	'PHPSHOP_PRICE_LIST_PRICE' => 'ราคา',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'สกุลเงิน',
	'PHPSHOP_PRICE_FORM_LBL' => 'รายละเอียดราคา',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'ราคาสินค้าใหม่ สำหรับสินค้า ',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'ปรับปรุงราคาสินค้า',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'ราคาใหม่',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'ปรับปรุงราคา',
	'PHPSHOP_PRICE_FORM_PRICE' => 'ราคา',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'สกุลเงิน',
	'PHPSHOP_PRICE_FORM_GROUP' => 'กลุ่มผู้ซื้อ',
	'PHPSHOP_LEAVE_BLANK' => '(ปล่อยว่างไว้<br />ถ้าไม่มีไฟล์!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'รายการ',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'เริ่มลดราคาวันที่',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'กำหนดวันที่เริ่มลดราคา',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'สิ้นสุดวันที่',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'กำหนดวันที่สิ้นสุดการลดราคา',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'เผยแพร่?',
	'PHPSHOP_FILES_LIST' => 'การจัดการไฟล์::รูปภาพ/รายการไฟล์ข้อมูล',
	'PHPSHOP_FILES_LIST_FILENAME' => 'ชื่อไฟล์',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'ชื่อไฟล์',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'ประเภทไฟล์',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'รูปภาพ',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'รูปภาพย่อ',
	'PHPSHOP_FILES_FORM' => 'อัพโหลดไฟล์สำหรับ',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'ไฟล์ปัจจุบัน',
	'PHPSHOP_FILES_FORM_FILE' => 'ไฟล์',
	'PHPSHOP_FILES_FORM_IMAGE' => 'รูปภาพ',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'อัพโหลดไปยัง',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'ที่เก็บภาพสินค้า',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'ที่เก็บไฟล์เฉพาะ',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'ดาวน์โหลดพาธ (เช่น สินค้าสำหรับขายที่สามารถดาวน์โหลดได้!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'สร้าง Thumbnail อัตโนมัติ?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'เผยแพร่ไฟล์?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'ชื่อไฟล์ (ที่ต้องการแสดงให้ลูกค้าเห็น)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'URL (เพิ่มเติม)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'ใส่ข้อความที่ต้องการแสดงให้ลูกค้า ในหน้าแสดงสินค้า<br />เช่น: 24ชม., 48 ชั่วโมง, 3 - 5 วัน, อยู่ระหว่างการจัดหา.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'หรือเลือกรูปภาพที่ต้องการให้แสดงในหน้ารายละเอียดสินค้า<br />รูปภาพจะอยู่ในไดเรคทอรี่ <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>ตัวอย่างรูปแบบการกำหนดคุณลักษณะอื่นๆ:</h4><span class="sectionname"><strong>Name;Extras;</strong>...</span>',
	'PHPSHOP_IMAGE_ACTION' => 'การกระทำของรูปภาพ',
	'PHPSHOP_PARAMETERS_LBL' => 'พารามิเตอร์',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'ชนิดสินค้า',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'รายการชนิดสินค้าสำหรับ',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'เพิ่มชนิดสินค้าสำหรับ',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'ชนิดสินค้า',
	'VM_PRODUCT_PRODUCT_TYPE_ADD_MULTIPLE_PRODUCTS' => ' หลายรายการสินค้า',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'ชนิดชื่อสินค้า',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'รายละเอียดชนิดสินค้า',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'พารามิเตอร์',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'ข้อมูลชนิดสินค้า',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'เผยแพร่?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'ชนิดของสินค้าในหน้าแสดงทั้งหมด',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'ชนิดของสินค้าในหน้าแสดงรายละเอียด',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'พารามิเตอร์ของชนิดสินค้า',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'พารามิเตอร์ข้อมูลต่างๆ',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'ไม่พบชนิดสินค้า!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'พารามิเตอร์ชื่อ',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'This name will be column name of table. Must be unicate and without space.<br/>For example: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameter Label',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Integer',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Short Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Float',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Char',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Date & Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Date',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Break Line',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Multiple Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Possible Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Show Possible Values as Multiple select?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>If Possible Values are set, Parameter can have only these values. Example for Possible Values:</strong><br/><span class="sectionname">Steel;Wood;Plastic;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Default Value',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Unit',
	'PHPSHOP_PRODUCT_CLONE' => 'Clone Product',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Hide out of stock products',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Featured & Discounted Products',
	'PHPSHOP_FEATURED' => 'Featured',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'featured AND discounted',
	'PHPSHOP_SHOW_DISCOUNTED' => 'discounted products',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Discounted Price',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Here you can override the discount setting fill in a special discount price for this product.<br/>
The Shop will create a new discount record from the discounted price.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Quantity Start',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Quantity End',
	'VM_PRODUCTS_MOVE_LBL' => 'Move products from one category to another',
	'VM_PRODUCTS_MOVE_LIST' => 'You have chosen to move the following %s products',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Move to the following category',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Select a product category to reorder products in a category',
	'VM_REVIEW_FORM_LBL' => 'Add Review',
	'PHPSHOP_REVIEW_EDIT' => 'Add/Edit a Review',
	'SEL_CATEGORY' => 'Select a category',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Minimum Purchase Quantity',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximum Purchase Quantity',
	'VM_DISPLAY_TABLE_HEADER' => 'Display Table Header',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Link to child product from list',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Include Product Type With Child',
	'VM_DISPLAY_USE_LIST_BOX' => 'Use List box for child products',
	'VM_DISPLAY_LIST_STYLE' => 'List Style',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Use Parent Settings:',
	'VM_DISPLAY_LIST_TYPE' => 'List:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Quantity:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Drop Down Box Values',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Display Child Description',
	'VM_DISPLAY_DESC_WIDTH' => 'Child Description Width',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Child Attribute Width',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Child Class Suffix',
	'VM_INCLUDED_PRODUCT_ID' => 'Product IDs to include',
	'VM_EXTRA_PRODUCT_ID' => 'Extra IDs',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Use Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Display Options',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Override Child products Display Values and use parents',
	'PHPSHOP_DISPLAY_NORMAL' => 'Standard Quantity Box',
	'PHPSHOP_DISPLAY_HIDE' => 'Hide Quantity Box',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Use Dropdown Box',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Use Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'One Add to Cart Button',
	'PHPSHOP_DISPLAY_MANY' => 'Add to Cart Button for each Child',
	'PHPSHOP_DISPLAY_START' => 'Start Value',
	'PHPSHOP_DISPLAY_END' => 'End Value',
	'PHPSHOP_DISPLAY_STEP' => 'Step Value',
	'PRODUCT_WAITING_LIST_TAB' => 'Waiting List',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Users waiting to be notified when this product is back in stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Notify these users now (when you have updated the number of products stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'notified',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Select Image',
	'VM_PRODUCT_RELATED_SEARCH' => 'Search for Products or Categories here:',
	'VM_FILES_LIST_ROLE' => 'Role',
	'VM_FILES_LIST_UP' => 'Up',
	'VM_FILES_LIST_GO_UP' => 'Go Up',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Show x products per row',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Category Browse Page',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Clone Product Options',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Also clone these Child Items',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Name/Date',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Select one or more Products',
	'VM_PRODUCT_SEARCHING' => 'Searching...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Attribute List Format:</h4>
Title = Color, Property = Red ; Click on New Property to add a new color: Green ; Then click on New attribute to add a new attribute, and so on.
<h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
Price = +10 to add this amount to the configured price.<br />  Price = -10 to subtract this amount from the configured price.<br />  Price = 10 to set the product\'s price to this amount.',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Product Image (full and thumb)',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Downloadable Product File (to be sold!)',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Resize Full Image File?'
); $VM_LANG->initModule( 'product', $langvars );
?>