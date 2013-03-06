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

require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

class modVMProductSlideshowHelper
{

	function getProducts($numberOfProducts = 0, $sortOrder = 'newest', $categoryId = 0, $specialProducts = FALSE ) 
	{
		$database = new ps_DB();
	
		if ($numberOfProducts > 0) {
			$limit = 'LIMIT ' . $numberOfProducts;
		} else {
			$limit = '';
		}
	
		$query 	= 'SELECT p.product_sku, p.product_id, p.product_name, p.product_url, p.product_s_desc, product_thumb_image, product_full_image'
				. ', c.category_id, c.category_flypage'
				. ' FROM #__{vm}_product AS p'
				. ' JOIN #__{vm}_product_category_xref as pc ON p.product_id=pc.product_id';
		if( $categoryId != 0 ) {
			$query .= ' AND pc.category_id=' . $categoryId;
		}
		$query .= ' JOIN #__{vm}_category as c ON pc.category_id=c.category_id';
		
		$query .= ' WHERE p.product_publish = \'Y\' AND c.category_publish = \'Y\' AND product_parent_id=0 ';
		if( CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != '1') {
			$query .= ' AND product_in_stock > 0 ';
		}
		
		if( $specialProducts ) {
			$query .= ' AND product_special = \'Y\' ';
		}
		
		switch( $sortOrder ) {
			case 'random':
				$query .= ' ORDER BY RAND() ' . $limit;	break;
			case 'newest':
				$query .= ' ORDER BY p.cdate DESC ' . $limit;	break;
			case 'oldest':
				$query .= ' ORDER BY p.cdate ASC ' . $limit; break;
			default:
				$query .= ' ORDER BY p.cdate DESC ' . $limit;	break;
		}
		$database->query( $query );
	
		$rows = $database->record;
		return $rows;
	}
}
