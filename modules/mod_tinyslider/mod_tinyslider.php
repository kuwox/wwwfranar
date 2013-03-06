<?
/*
// "Joomla Virtuemart products Tinyslider " Module Joomla 1.5 - Version 1.5-2
// License: http://www.gnu.org/copyleft/gpl.html
// Author: M.Arjun
// Projectsite: http://sourceforge.net/projects/virt-tinyslider/
// Based on: Virtuemart - Joomla.org
*/

$LiveSite = JURI::base();



?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
        //move he last list item before the first item. The purpose of this is if the user clicks to slide left he will be able to see the last item.
        $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
        
        
        //when user clicks the image for sliding right        
        $('#right_scroll img').click(function(){
        
            //get the width of the items ( i like making the jquery part dynamic, so if you change the width in the css you won't have o change it here too ) '
            var item_width = $('#carousel_ul li').outerWidth() + 10;
            
            //calculae the new left indent of the unordered list
            var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
            
            //make the sliding effect using jquery's anumate function '
            $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
                
                //get the first list item and put it after the last list item (that's how the infinite effects is made) '
                $('#carousel_ul li:last').after($('#carousel_ul li:first')); 
                
                //and get the left indent to the default -210px
                $('#carousel_ul').css({'left' : '-210px'});
            }); 
        });
        
        //when user clicks the image for sliding left
        $('#left_scroll img').click(function(){
            
            var item_width = $('#carousel_ul li').outerWidth() + 10;
            
            /* same as for sliding right except that it's current left indent + the item width (for the sliding right it's - item_width) */
            var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
            
            $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
            
            /* when sliding to left we are moving the last item before the first list item */            
            $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
            
            /* and again, when we make that change we are setting the left indent of our unordered list to the default -210px */
            $('#carousel_ul').css({'left' : '-210px'});
            });
            
            
        });
  });
</script>
<style type="text/css">
                      #carousel_inner {
                      float:left; /* important for inline positioning */
                      width:701px; /* important (this width = width of list item(including margin) * items shown */ 
                      overflow: hidden;  /* important (hide the items outside the div) */
                      /* non-important styling bellow */
                      background: #F0F0F0;
                      margin-right: 10px;
                      }
                      
                      #carousel_ul {
                      position:relative;
                      left:-210px; /* important (this should be negative number of list items width(including margin) */
                      list-style-type: none; /* removing the default styling for unordered list items */
                      margin: 0px;
                      padding: 0px;                  
                      width:9999px; /* important */
                      /* non-important styling bellow */
                      padding-bottom:10px;
                      }
                            
                      #carousel_ul li{
                      float: left; /* important for inline positioning of the list items */                                    
                      width:97px;  /* fixed width, important */
                      
                      /* just styling bellow*/
                      padding:0px;
                      height:110px;
                      /*margin-top:10px;
                      margin-bottom:10px; 
                      /*margin-left:12px;* / 
                      margin-right:   px;*/
                      margin: 10px 31px 10px -13px;
                      height: 182px; 
                      overflow: hidden;
                      }
                      
                      #carousel_ul li a {
                        color:#4C4C4C;
                        font-family:Verdana;
                        font-size:11px;
                        font-weight:bold;
                        text-decoration:none;
                      }
                      
                      #carousel_ul li img {
                      .margin-bottom:-4px; /* IE is making a 4px gap bellow an image inside of an anchor (<a href...>) so this is to fix that*/
                      /* styling */
                      cursor:pointer;
                      cursor: hand; 
                      border:0px; 
                      }
                      #left_scroll, #right_scroll{
                      float:left; 
                      height:130px; 
                      width:15px; 
                      }
                      #left_scroll img, #right_scroll img{
                      /*styling*/
                      cursor: pointer;
                      cursor: hand;
                      }
                      .style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.thumbnail
{
width:97px;
height:156px;
}
</style>


<?
global $mosConfig_absolute_path, $mainframe,$sess;

if( file_exists(dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' )) {
	require_once( dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' );
} else {
	require_once( dirname(__FILE__).'/../components/com_virtuemart/virtuemart_parser.php' );
}

require_once ( CLASSPATH. 'ps_product.php');
$ps_product = new ps_product;
$db = new ps_DB;

switch( $SortMethodsmooth ) {
		
			default:
				$orderfilter = "\n ORDER BY   RAND() LIMIT 0, 12";
				break;
		}

if ( $category_id ) {
	$cat_ids = explode(",",$category_id);
	if (count($cat_ids) > 1){
		$multi_cats = 1;
	}
	$q  = "SELECT p.product_id,p.product_name,p.product_s_desc, p.product_thumb_image, p.product_full_image,c.category_id, c.category_flypage ";
	$q .= "FROM #__{vm}_product p, #__{vm}_product_category_xref pc, #__{vm}_category c WHERE ";
	$q .= "pc.product_id = p.product_id AND ";
    $q .= "pc.category_id = c.category_id ";
	if ($multi_cats){
		$i = 1;
		$q .= "AND (";
		foreach ($cat_ids as $cat_id){
			if ($i == count($cat_ids)){
				$q .= "(c.category_id='$cat_id')";
			} else {
				$q .= "(c.category_id='$cat_id') OR \n";
			}
			$i++;
		}
		$q .= ")  \n";
	} else {
		$q .= "AND c.category_id='$category_id' \n";
	}
	$q .= "AND p.product_publish='Y' \n";
	$q .= $qfilter;
	if( CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != "1") {
		$q .= " AND product_in_stock > 0 \n";
	}
	$q .= $orderfilter;
}
else {
	$q  = "SELECT p.product_id,p.product_name,p.product_s_desc, p.product_thumb_image, p.product_full_image,c.category_id, c.category_flypage ";
	$q .= "FROM #__{vm}_product p, #__{vm}_product_category_xref pc, #__{vm}_category c WHERE ";
	$q .= "pc.product_id = p.product_id AND ";
    $q .= "pc.category_id = c.category_id AND ";
	$q .= "(p.product_parent_id='' OR p.product_parent_id='0') AND ";
	$q .= "p.vendor_id='".$_SESSION['ps_vendor_id']."' AND ";
    $q .= "p.product_publish='Y' ";
	$q .= $qfilter;
	
	if( CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != "1") {
		$q .= " AND p.product_in_stock > 0 ";
	}
	$q .= $orderfilter;
}
$db->query($q);if( $db->num_rows() > 10 ) {

$document =& JFactory::getDocument();




?>

					  <div class="style1">
					  
					  You might also like					  </div>  
                      <div id='carousel_container' style="height: 182px; overflow: hidden">
                      <div id='left_scroll' style="padding-top: 80px; margin-left: 7px; margin-right: 23px;"><img src="<?php echo $LiveSite ?>/modules/mod_tinyslider/images/arrow_left.jpg" width="17" height="20" border="0" /></div>
                        <div id='carousel_inner' style="height: 182px;">
                            <ul id='carousel_ul'>
							<?php

	while($db->next_record() ){
      if( !$db->f('category_flypage') ) {
      	$flypage = ps_product::get_flypage( $db->f('product_id'));
      }
      else {
      	$flypage = $db->f('category_flypage');
      }

		
        ?>


		<?php if ($showproductname == TRUE) {
       
	     }
		?>
		
                                <li>
                              
    
       
     
		 <a href="<?php  $sess->purl(URL . "index.php?page=shop.product_details&flypage=$flypage&product_id=" . $db->f("product_id") . "&category_id=" . $db->f("category_id")) ?>"title="open image" class="open">
        <?php echo ps_product::image_tag( $db->f("product_thumb_image"), 'class="thumbnail" ' ) ?></a>
		<br />
		 <div style="margin-top:-5px; font-size:12px; font-family:Verdana; font-weight:bold;"><?  echo $db->p("product_name"); ?></div>
                    </li>
                              
                     <?php
}
?>             <? }?>      
                              
                  
                            </ul>
                        </div>
                      <div id='right_scroll'><img src="<?php echo $LiveSite ?>/modules/mod_tinyslider/images/arrow_right.jpg" width="17" height="20" border="0"  style="padding-top: 80px;"/></div>
                      </div>





