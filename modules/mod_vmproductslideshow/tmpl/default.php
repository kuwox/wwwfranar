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
JHTML::_('behavior.mootools');
$doc = &JFactory::getDocument();
$doc->addScript('modules/mod_vmproductslideshow/tmpl/slideshow.js');

$showProgressBar		= $params->get( 'showProgressBar', 1);
$width 					= $params->get( 'width', 400 );
$height 				= $params->get( 'height', 300 );
$showCaptions			= $params->get( 'showCaptions', 1 );
$captionHeight 			= $params->get( 'captionHeight', 30);
$captionBackgroundColor	= $params->get( 'captionBackgroundColor', '#333');
$showProductName 		= $params->get( 'showProductName', 1 );
$productNameSize 		= $params->get( 'productNameSize', '13px');
$productNameColor 		= $params->get( 'productNameColor', '#fff');
$showProductShortDesc	= $params->get( 'showProductShortDesc', 0 );
$productShortDescSize 	= $params->get( 'productShortDescSize', '11px');
$productShortDescColor 	= $params->get( 'productShortDescColor', '#ccc');
$productImageResize		= $params->get( 'productImageResize', 1);
$slideDuration			= $params->get( 'slideDuration', 5000 );
$slideEffect 			= $params->get( 'slideEffect', 'combo');
$panPercent				= $params->get( 'panPercent', 50);
$zoomPercent			= $params->get( 'zoomPercent', 50);
$transTypePW 			= $params->get( 'transTypePW', 'Expo.easeOut');
$transDuration 			= $params->get( 'transDuration', 750);

$instanceSuffix			= trim($params->get( 'instanceSuffix', ''));

if (count($products) > 0) :
?>
	<!-- Virtuemart Product Slideshow -->
	<div id="vmProductSlideShow<?php echo $instanceSuffix; ?>">
    	<div style="text-align:center;width:100%;">
        	<a href="http://www.jampmark.com/virtuemart-product-slideshow.html" style="text-decoration:none;font-size:12px;" title="Virtuemart Product Slideshow Web Site">Virtuemart Product Slideshow</a>
        </div>
    </div>
	<script type="text/javascript">
	<!--
		window.addEvent('load', function(){
				var vmpssProducts<?php echo $instanceSuffix; ?> = [];

				<?php foreach($products as $product) : ?>
				vmpssProducts<?php echo $instanceSuffix; ?>.push({
					file: '<?php echo $product->product_image_url; ?>',
					<?php if ($showCaptions) : ?>
					title: '<?php if ($showProductName) echo addslashes(trim($product->product_name)); ?>',
					desc: '<?php if ($showProductShortDesc) echo addslashes(trim($product->product_s_desc)); ?>',
					<?php else : ?>
					title: '',
					desc: '',
					<?php endif; ?>
					url: '<?php echo $product->product_url; ?>'
				});
				<?php endforeach; ?>
				
				var vmpssInstance<?php echo $instanceSuffix; ?> = new Slideshow('vmProductSlideShow<?php echo $instanceSuffix; ?>', { 
					type: '<?php echo $slideEffect; ?>',
					showTitleCaption: <?php echo $showCaptions; ?>,
					captionHeight: <?php echo $captionHeight; ?>,
					width: <?php echo $width; ?>, 
					height: <?php echo $height; ?>, 
					pan: <?php echo $panPercent; ?>,
					zoom: <?php echo $zoomPercent; ?>,
					loadingDiv: <?php echo $showProgressBar ? 'true' : 'false'; ?>,
					resize: <?php echo $productImageResize == 1 ? 'true' : 'false'; ?>,
					duration: [<?php echo $transDuration; ?>, <?php echo $slideDuration; ?>],
					transition: Fx.Transitions.<?php echo $transTypePW; ?>,
					images: vmpssProducts<?php echo $instanceSuffix; ?>, 
					path: ''
				});
				
				vmpssInstance<?php echo $instanceSuffix; ?>.caps.div.setStyles({
					background: '<?php echo $captionBackgroundColor; ?>'
				});
				vmpssInstance<?php echo $instanceSuffix; ?>.caps.h2.setStyles({
					color: '<?php echo $productNameColor; ?>',
					fontSize: '<?php echo $productNameSize; ?>'
				});
				vmpssInstance<?php echo $instanceSuffix; ?>.caps.p.setStyles({
					color: '<?php echo $productShortDescColor; ?>',
					fontSize: '<?php echo $productShortDescSize; ?>'
				});
			});
	//-->
	</script>
<?php
endif;
?>