<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: affiliate.affiliate_details.php 1095 2007-12-19 20:19:16Z soeren_nb $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );

search_header($VM_LANG->_('PHPSHOP_AFFILIATE_LIST_LBL'), 'affiliate', "affiliate_list"); 


// Enable the multi-page search result display
$limitstart = vmGet( $_REQUEST, 'limitstart', 0);

  if ($keyword) {
     $list  = "SELECT * FROM #__{vm}_vendor WHERE ";
     $count = "SELECT count(*) as num_rows FROM v#__{vm}_endor WHERE ";
     $q  = "(vendor_name LIKE '%$keyword%' OR ";
     $q .= "vendor_store_desc LIKE '%$keyword%'";
     $q .= ") ";
     $q .= "ORDER BY vendor_name ASC ";
     $list .= $q . " LIMIT $limitstart, " . $limit;
     $count .= $q;   
  }

  elseif ($vendor_category_id) 
  {
     $q = "";
     $list="SELECT * FROM #__{vm}_vendor, #__{vm}_vendor_category WHERE ";
     $count="SELECT count(*) as num_rows FROM #__{vm}_vendor,#__{vm}_vendor_category WHERE "; 
     $q = "#__{vm}_vendor.vendor_category_id=#__{vm}_vendor_category.vendor_category_id ";
     $q .= "ORDER BY #__{vm}_vendor.vendor_name ASC ";
     $list .= $q . " LIMIT $limitstart, " . $limit;
     $count .= $q;   
  }
  else 
  {
     $q = "";
     $list  = "SELECT * FROM #__users, #__{vm}_affiliate";
     $list .= " WHERE #__users.user_info_id = #__{vm}_affiliate.user_id";
     $list .= " AND #__users.id = '".$auth["user_id"]."'";
	 $list .= " ORDER BY company ASC";
     $count = "SELECT count(*) as num_rows FROM #__{vm}_affiliate"; 
     $list .= $q . " LIMIT $limitstart, " . $limit;
     $count .= $q;   
  }
  $db->query($count);
  $db->next_record();
  $num_rows = $db->f("num_rows");

  if ($num_rows == 0) {
     echo $VM_LANG->_('PHPSHOP_NO_SEARCH_RESULT');

  }
  else {
?>
<table class="adminlist">

  <tr > 
    <th width="28%"><?php echo $VM_LANG->_('PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME') ?></th>
    <th width="12%"><?php echo $VM_LANG->_('PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE') ?></th>
    <th width="18%"><?php echo $VM_LANG->_('PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL')?></th>
    <th width="31%"><?php echo $VM_LANG->_('PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION')?></th>
    <th width="11%"><?php echo $VM_LANG->_('PHPSHOP_AFFILIATE_LIST_ADMIN') ?></th>

  </tr>

  <?php
$db->query($list);
$i = 0;

while ($db->next_record()) {
  if ($i++ % 2) 
     $bgcolor='row0';
  else
     $bgcolor='row1';
?>
  <tr class="<?php echo $bgcolor ?>"> 
    <td width="28%" nowrap>
   <?php
    $url = SECUREURL . "?page=$modulename.affiliate_form&affiliate_id=";
    $url .= $db->f("affiliate_id");
    echo '<a href="' . $sess->url($url) . '">';
    echo $db->f("company");
    echo "</a><br />";
   ?>
   </td>
    <td width="12%"><?php

if($db->f("active")=='Y') echo "Yes"; else echo "No";

 ?></td>
    <td width="18%">
	<?php
	$dbt = new ps_DB;

	$q = "SELECT affiliate_id, SUM(order_subtotal) AS stotal FROM  #__{vm}_orders,#__{vm}_affiliate_sale";
	$q .=" WHERE #__{vm}_orders.order_id = #__{vm}_affiliate_sale.order_id";
	$q .=" AND #__{vm}_affiliate_sale.affiliate_id = '".$db->f("affiliate_id")."'";
	$q .=" GROUP BY affiliate_id";
	$dbt->query($q);
	if($dbt->next_record()){

	 printf("%1.2f",$dbt->f("stotal"));
	 }
	else echo "no sales";

	?>
	</td>
    <td width="31%">
	<?php
	if($dbt->f("stotal")){
	  printf("%1.2f",$dbt->f("stotal") * ($db->f("rate")*0.01));
	}
	else echo "none";
	?>
	</td>
    <td width="11%"><a href="<?php $sess->purl(SECUREURL . "?page=$modulename.affiliate_form&affiliate_id=" . $db->f("affiliate_id")) ?>">go</a></td>
  </tr>
  <?php } ?> 
</table>
<?php 

  search_footer('affiliate', "affiliate_list", $limitstart, $num_rows, $keyword); 

}

?>

