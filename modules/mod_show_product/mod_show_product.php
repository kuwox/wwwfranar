<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// Check if virtuemart exist

if (!is_file(JPATH_BASE . "/components/com_virtuemart/virtuemart.php")) { ?>
	<div style="text-align: left; direction: ltr; color: red; font-weight: bold;">
	Can't find VirtueMart <br />
	This module can only work <br />
	with virtuemart installed. <br />
	<br />
	</div>
	<?php return; } 



//Get product parameters from joomla module config

$my_product_id = $params->get('product_id',0);
$currency_sign = $params->get('currency_sign');
$tooltip = $params->get('tooltip',0);
$tooltiptype = $params->get('tooltiptype',0);
$showname = $params->get('showname',0);
$showprice = $params->get('showprice',0);
$usevat = $params->get('use_vat',1);
$lightbox = $params->get('lightbox',0);
$showlink = $params->get('showlink',0);
$showviewproduct = $params->get('showviewproduct',0);
$viewproducttext = $params->get('viewproduct_text','[ View Product ]');

// Get product variables
$database = JFactory::getDBO();
$database->Execute("SELECT product_name, product_desc, product_s_desc, product_thumb_image, product_full_image FROM #__vm_product WHERE product_id =". $my_product_id." LIMIT 1" );	
$pdata = $database->loadAssoc();



// Get product price
			
$database = JFactory::getDBO();
$database->Execute("SELECT product_price FROM #__vm_product_price WHERE product_id =". $my_product_id);	
$my_product_price = $database->loadResult();    

if ($usevat == 0) { 
$vatid = $params->get('vat_valute',1);
$my_product_price = $my_product_price * $vatid;
}
		
// Define images 
$my_product_thumb = $pdata['product_thumb_image'];
$my_product_fullimage = $pdata['product_full_image'];
$vm_image = "<img src='components/com_virtuemart/shop_image/product/".$my_product_thumb."' />";		
$vm_fullimage = "components/com_virtuemart/shop_image/product/".$my_product_fullimage."";

// we check if the product image exists, if not we will put a "no image" picture..
if (!is_file(JPATH_BASE . "/components/com_virtuemart/shop_image/product/".$my_product_thumb)) { 
$vm_image = "<img src='modules/mod_show_product/noimage.jpg' />";		
$vm_fullimage = "modules/mod_show_product/noimage.jpg";
} 


// prices
$fixed_price = explode(".", $my_product_price);
$my_product_price = $fixed_price[0].$currency_sign;

//flypage
$gotopage = "index.php?page=shop.product_details&flypage=flypage.tpl&product_id=".$my_product_id."&option=com_virtuemart";

// Clean description text from tags
$clean_desc = str_replace(array("\r\n", "\r", "\n"), "<br />", strip_tags($pdata['product_desc']));
$clean_desc2 = str_replace(array('"'), '', $clean_desc);	
$clean_desc3 = str_replace(array("'"), "", $clean_desc2);	

// Check if there is product configured..
	
if ($my_product_id == 0) {
		echo "Please define product ID in the module configuration";
		return;
}


// HTML Starts here
?>

<head>
<link rel="stylesheet" href="modules/mod_show_product/mod_show_product.css" type="text/css" />

<!-- Internal lightbox integration -->

<?php if ($lightbox == 1) { ?>

	<script type="text/javascript" src="modules/mod_show_product/slimbox/js/jquery.js"></script>
	<script type="text/javascript" src="modules/mod_show_product/slimbox/js/slimbox2.js"></script>
	<link rel="stylesheet" href="modules/mod_show_product/slimbox/css/slimbox2.css" type="text/css" media="screen" />	
	
<?php } ?>	

<!-- EOF internal lightbox integration -->


</head>
<body>
<?php if ($tooltip == 0) { 


?>

	<?php if ($tooltiptype == 0 && !empty($pdata['product_s_desc'])) { ?>
	<div id="show_product_holder">
    <div class="tooltip_desc">
    <span class="tooltip_idesc">
	 <?php echo nl2br(strip_tags($pdata['product_s_desc'])); ?>
	  </span>
    </div>
    <?php } if ($tooltiptype == 1 && !empty($pdata['product_desc'])) { ?>
	<div id="show_product_holder">
    <div class="tooltip_desc">
    <span class="tooltip_idesc">
    <?php echo nl2br(strip_tags($pdata['product_desc'])); ?>
	 </span>
    </div>
	<?php } ?>
   
  
<?php } ?>

<table class="mod_show_product" cellpadding="0" cellspacing="0" dir="rtl" align="middle">

	<tbody>
	
	<?php if ($showname == 0) { ?>
		<tr>
			<td class="product_name" align="center" valign="middle" width="135">
			<span class="name">
			<?php echo $pdata['product_name'] ?>
			</span>
			</td>
		</tr>
	<?php } ?>
		<tr>
			<td class="product_picture" align="center" valign="middle">
			<a href="<?php echo $vm_fullimage; ?>" rel="lightbox">
			<?php echo $vm_image; ?>
			</a>
			</td>
			
		</tr>
		
		<?php if ($showprice == 0) { ?>
		<tr>
			<td class="price" align="center" valign="middle">
			<?php echo $my_product_price; ?>
			</td>
		</tr>
		<?php } ?>

<?php if ($showviewproduct == 0) { ?>		
		<tr>
			<td class="link" align="center" valign="middle">
			<a href="<?php echo $gotopage; ?>"><?php echo $viewproducttext; ?></a>
			</td>
		</tr>
		<?php } ?>
<?php if ($showlink == 0) { ?>
		<tr>
			<td align="center">
			<a style="font-size: 10px; color: #ccc; text-decoration: none;" href="http://jetserver.co.il" target="_blank">Jetserver.co.il</a>
			</td>
		</tr>
<?php } ?>		
	</tbody>
	
</table>
<?php if ($tooltip == 0) { ?>
<?php if ($tooltiptype == 0 && !empty($pdata['product_s_desc'])) { ?>
 	</div> <!-- close show product holoder small desc -->
	 <?php } if ($tooltiptype == 1 && !empty($pdata['product_desc'])) { ?>
	</div> <!-- close show product holoder large desc -->
    <?php } ?>
    
    <?php } ?>

</body>