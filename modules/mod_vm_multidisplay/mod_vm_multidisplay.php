<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
 * All-in-one module for VirtueMart
 * includes:
 * Latest Products Manager
 * Top Ten Products Manager
 * Special Products Manager
 * (All Modules originally designed by Mr PHP)
 * Modified by Jason Lim (Eko Solution)
 * Original version $Id: mod_virtuemart_allinone.php 1232 2008-02-09 15:53:22Z soeren_nb $
 * @package VirtueMart
 * @subpackage modules
 *
 * Conversion to Mambo and the rest:
 * 	@copyright (C) 2004-2008 soeren
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * VirtueMart is Free Software.
 * VirtueMart comes with absolute no warranty.
 *
 * www.virtuemart.net
 */

// retrieve parameters
$show_new = $params->get( 'show_new', 0 );
$show_topten = $params->get( 'show_topten', 0 );
$show_special = $params->get( 'show_special', 0 );
$show_random = $params->get( 'show_random', 0 );
$show_price = (bool)$params->get( 'show_price', 1 ); // Display the Product Price?
$show_addtocart = (bool)$params->get( 'show_addtocart', 1 ); // Display the "Add-to-Cart" Link?
$max_items = $params->get( 'max_items', 5 );//no of items to display
$display_style = $params->get( 'display_style', "horizontal" ); // Display Style
$topten_tabname = $params->get( 'topten_tabname', "Most Popular Products" );
$featured_tabname = $params->get( 'featured_tabname', "Featured Products" );
$random_tabname = $params->get( 'random_tabname', "Random Products" );
$new_tabname = $params->get( 'new_tabname', "New Arrival" );
$products_per_row = $params->get( 'products_per_row', 5 );
  
$count_mods = $show_new + $show_topten + $show_special + $show_random;
$max_mods = $count_mods;

// check if parameters are given
// if no, give default values
if ($count_mods == 0) { 
    $max_mods = $count_mods = 3;
    $show_new = '1';
    $show_topten = '1';
    $show_special = '1';
}

// Load the virtuemart main parse code
if( file_exists(dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' )) {
	require_once( dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' );
} else {
	require_once( dirname(__FILE__).'/../components/com_virtuemart/virtuemart_parser.php' );
}

global $VM_LANG, $vm_mainframe;

$tabs = new vmTabPanel(false,true,uniqid('all_in_one'));

// In Joomla! 1.0 and Mambo we need to print the style and script declarations when option != com_virtuemart (called from a module)
$print = !vmIsJoomla('1.5', '>=');
$vm_mainframe->render($print);
 
$paneid = uniqid('all_in_one');
$tabs->startPane($paneid);

if ($show_special == '1') { 
	//////////////////////////////
	// Featured / Special products
	//
	$tabs->startTab($featured_tabname, 'featured_'.$paneid);        
  require_once ( CLASSPATH. 'ps_product.php');
  $ps_product = new ps_product;
        
  $db=new ps_DB;
                
  $q  = "SELECT DISTINCT product_sku FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category WHERE ";
  $q .= "(#__{vm}_product.product_parent_id='' OR #__{vm}_product.product_parent_id='0') ";
  $q .= "AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id ";
  $q .= "AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id ";
  $q .= "AND #__{vm}_product.product_publish='Y' ";
  $q .= "AND #__{vm}_product.product_special='Y' ";
  $q .= "ORDER BY product_name DESC ";
  $q .= "LIMIT $max_items ";
  $db->query($q);
  
  if( $db->num_rows() > 0 ){
  ?>
      <table border="0" cellpadding="0" cellspacing="0" width="100%">       
  <?php
        $i = 0;
        while($db->next_record() ){
			if ($i%2)
				$sectioncolor = "sectiontableentry2";
			else
				$sectioncolor = "sectiontableentry1";
              
			if( $display_style == "vertical" ) {
				?>
				<tr align="center" class="<?php echo $sectioncolor ?>">
					<td><?php $ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart); ?><br /></td>
				</tr>
				<?php
			}
			elseif( $display_style== "horizontal" ) {
				if( $i == 0 )
					echo "<tr>\n";
				echo "<td align=\"center\">";
				$ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart);
				echo "</td>\n";
				if( ($i+1) == $max_items )
					echo "</tr>\n";
			}
			elseif( $display_style== "table" ) {
				if( $i == 0 )
					echo "<tr>\n";
				echo "<td align=\"center\">";
				$ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart);
				echo "</td>\n";
				if ( ($i+1) % $products_per_row == 0)
					echo "</tr><tr>\n";
				if( ($i+1) == $max_items )
					echo "</tr>\n";
			}
			$i++;
        }
  ?>
  </table>
  <?php
  }
	$tabs->endTab(); 
  }

if ($show_new == '1') { 
    //////////////////////////////
    // Latest Products
    //
    $tabs->startTab($new_tabname, 'new_'.$paneid);

    require_once ( CLASSPATH. 'ps_product.php');
    $ps_product = new ps_product;
        
    $db=new ps_DB;

    $q  = "SELECT * FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category WHERE ";
    $q .= "product_parent_id=''";
    $q .= "AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id ";
    $q .= "AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id ";
    $q .= "AND #__{vm}_product.product_publish='Y' ";
    $q .= "ORDER BY #__{vm}_product.product_id DESC ";
    $q .= "LIMIT $max_items ";
    $db->query($q);
    
  if( $db->num_rows() > 0 ){
  ?>
      <table border="0" cellpadding="0" cellspacing="0" width="100%">       
  <?php
        $i = 0;
        while($db->next_record() ){
			if ($i%2)
				$sectioncolor = "sectiontableentry2";
			else
				$sectioncolor = "sectiontableentry1";
              
			if( $display_style == "vertical" ) {
				?>
				<tr align="center" class="<?php echo $sectioncolor ?>">
					<td><?php $ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart); ?><br /></td>
				</tr>
				<?php
			}
			elseif( $display_style== "horizontal" ) {
				if( $i == 0 )
					echo "<tr>\n";
				echo "<td align=\"center\">";
				$ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart);
				echo "</td>\n";
				if( ($i+1) == $max_items )
					echo "</tr>\n";
			}
			elseif( $display_style== "table" ) {
				if( $i == 0 )
					echo "<tr>\n";
				echo "<td align=\"center\">";
				$ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart);
				echo "</td>\n";
				if ( ($i+1) % $products_per_row == 0)
					echo "</tr><tr>\n";
				if( ($i+1) == $max_items )
					echo "</tr>\n";
			}
			$i++;
        }
  ?>
  </table>
  <?php
  }

	$tabs->endTab();
  }

if ($show_topten == '1') { 
      //////////////////////////////
      // Top Ten
      //
  $tabs->startTab($topten_tabname, 'top_'.$paneid);
      
  require_once(CLASSPATH.'ps_product.php');
  $ps_product = new ps_product;
  
  require_once(CLASSPATH.'ps_product_attribute.php');
  $ps_product_attribute = new ps_product_attribute;
  
  require_once(CLASSPATH.'ps_product_category.php');
  $ps_product_category = new ps_product_category;
  
  ?>
  
  <!--Top 10-->
  <?php
    $list  = "SELECT * FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category WHERE ";
		$q = "#__{vm}_product.product_publish='Y' AND ";
		$q .= "#__{vm}_product_category_xref.product_id = #__{vm}_product.product_id AND ";
		$q .= "#__{vm}_product_category_xref.category_id = #__{vm}_category.category_id AND ";
    $q .= "#__{vm}_product.product_sales>0 ";
    $q .= "ORDER BY #__{vm}_product.product_sales DESC";
    $list .= $q . " LIMIT 0, $max_items "; 

    global $sess;
    $db = new ps_DB;
    $db->query($list);
    
  if( $db->num_rows() > 0 ){
  ?>
      <table border="0" cellpadding="0" cellspacing="0" width="100%">       
  <?php
        $i = 0;
        while($db->next_record() ){
			if ($i%2)
				$sectioncolor = "sectiontableentry2";
			else
				$sectioncolor = "sectiontableentry1";
              
			if( $display_style == "vertical" ) {
				?>
				<tr align="center" class="<?php echo $sectioncolor ?>">
					<td><?php $ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart); ?><br /></td>
				</tr>
				<?php
			}
			elseif( $display_style== "horizontal" ) {
				if( $i == 0 )
					echo "<tr>\n";
				echo "<td align=\"center\">";
				$ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart);
				echo "</td>\n";
				if( ($i+1) == $max_items )
					echo "</tr>\n";
			}
			elseif( $display_style== "table" ) {
				if( $i == 0 )
					echo "<tr>\n";
				echo "<td align=\"center\">";
				$ps_product->show_snapshot($db->f("product_sku"), $show_price, $show_addtocart);
				echo "</td>\n";
				if ( ($i+1) % $products_per_row == 0)
					echo "</tr><tr>\n";
				if( ($i+1) == $max_items )
					echo "</tr>\n";
			}
			$i++;
        }
  ?>
  </table>
  <?php
  }
  ?>
  <!--Top 10 End-->
  <?php
	$tabs->endTab(); 
  }

if ($show_random == '1') { 
	////////////////////////////
    // Random products
    //
    $tabs->startTab($random_tabname, 'random_'.$paneid );
	?>
	<table cellspacing="0" cellpadding="1" width="100%" class="modtableborder">

	<?php
    require_once ( CLASSPATH. 'ps_product.php');
    $ps_product = new ps_product;
        
    $db=new ps_DB;
    
    $max_items=2; //maximum number of items to display

    $q  = "SELECT DISTINCT product_sku FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category WHERE ";
    $q .= "product_parent_id=''";
    $q .= "AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id ";
    $q .= "AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id ";
    $q .= "AND #__{vm}_product.product_publish='Y' ";
    $q .= "ORDER BY product_name DESC";
    $db->query($q);
    
    $i=0;
    while($db->next_record()){
        $prodlist[$i]=$db->f("product_sku");
        $i++;
    }
    
    if($db->num_rows()!=0){ ?>
          
            <tr align="center">
              <td>
                <br><?php
    
        srand ((double) microtime() * 10000000);
        if (sizeof($prodlist)>1)
            $rand_prods = array_rand ($prodlist, $max_items);
        else
            $rand_prods = rand (4545.3545, $max_items);
            
        if($max_items==1){
          $ps_product->show_snapshot($prodlist[$rand_prods], $show_price, $show_addtocart);
          print "<br /><br />";
        }
        else{
          for($i=0; $i<$max_items; $i++){
            $ps_product->show_snapshot($prodlist[$rand_prods[$i]], $show_price, $show_addtocart);
            print "<br /><br />";
          }
        }
    
              ?>
              </td>
            </tr>          
          <?php
      } ?>    
    </table>
 <?php
 	$tabs->endTab();
 }
 $tabs->endPane();
 
 ?>