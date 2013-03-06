<?php
/**
* @package vmProductSlideshow
* @copyright Copyright (C) 2008 Jamp Mark Web Creations. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*
* Virtuemart Product Slideshow
* NOTE: THIS MODULE REQUIRES AN INSTALLED VirtueMart COMPONENT!
* This file is part of Virtuemart Product Slideshow
*
*   This program is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   (at your option) any later version.
*
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*
*   You should have received a copy of the GNU General Public License
*   along with Virtuemart Product Slideshow.  If not, see <http://www.gnu.org/licenses/>.
*
* Created on October 12 2008
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Load the virtuemart main parse code
if( file_exists(dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' )) {
	require_once( dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' );
} else {
	require_once( dirname(__FILE__).'/../components/com_virtuemart/virtuemart_parser.php' );
}

// Include the helper functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$sortOrder 			= $params->get( 'sortOrder', 'newest');
$numberOfProducts 	= $params->get( 'numProducts', 5);
$categoryId 		= $params->get( 'productCategoryId', 0);
$specialProducts 	= $params->get( 'specialProducts', 0);
$productImageType	= $params->get( 'productImageType', 'thumb');

$products = modVMProductSlideshowHelper::getProducts( $numberOfProducts, $sortOrder, $categoryId, $specialProducts );


global $sess, $mm_action_url;

require_once CLASSPATH . 'ps_product.php';
$ps_product = new ps_product;

$count = count($products);
for($i = 0; $i < $count; $i++) {
	$image = trim($productImageType === 'thumb' ? $products[$i]->product_thumb_image : $products[$i]->product_full_image);
	if ($image == '') {
		$products[$i]->product_image_url = VM_THEMEURL . 'images/' . NO_IMAGE;
	// virgil: 2009-01-09 check for full product image url
	} else if (strtolower(substr($image, 0, 4)) == 'http') { 
		$products[$i]->product_image_url = $image;
	} else {
		$products[$i]->product_image_url = IMAGEURL . 'product/' . $image;
	}
	
	// virgil: 2009-01-11 get category id
	$cid = $products[$i]->category_id;
	// virgil: 2009-01-22 get correct product flypage
	$flypage = $products[$i]->category_flypage ? $products[$i]->category_flypage : $ps_product->get_flypage($products[$i]->product_id);
	
	$products[$i]->product_url = '?page=shop.product_details&category_id=' .$cid . '&flypage=' . $flypage . '&product_id=' . $products[$i]->product_id;

	// 2009-03-11: virgil - Removed forced URL processing using JRoute and made SEF product URL generation optional.
	// 2009-03-11: virgil - Output absolute product fly page URL so it would open correctly when product image is clicked on a slideshow running inside category pages regardless of SEF settings.
	// 2009-03-11: virgil - Disabled encoding of ampersands so product fly page urls would work correctly in opera and firefox when SEF is off.
	$products[$i]->product_url = $sess->url($mm_action_url . 'index.php' . $products[$i]->product_url, TRUE, FALSE);
}


require(JModuleHelper::getLayoutPath('mod_vmproductslideshow'));