<?php defined('_JEXEC') or die('Restricted access'); ?>

<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">
<div id="editcell">
    <table class="adminlist">
    <thead>
        <tr>
            <th width="5">
                <?php echo JText::_('#'); ?>
            </th>
			<th width="20">
			    <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
			</th>
	        <th class="sortable">
	        	<?php echo JHTML::_('grid.sort', JText::_('GRPNAME'), 'name', $this->lists['order_Dir'], $this->lists['order']); ?>
	        </th>
	        <th class="sortable">
	        	<?php echo JHTML::_('grid.sort', JText::_('ID'), 'id', $this->lists['order_Dir'], $this->lists['order']); ?>
	        </th>
        </tr>            
    </thead>
	<tfoot>
		<tr>
			<td colspan="4"><?php echo $this->pagination->getListFooter(); ?></td>
		</tr>
	</tfoot>
<?php
    $k = 0;
    for ($i=0, $n=count($this->items); $i < $n; $i++)
    {
        $row 		=& $this->items[$i];
		$checked    = JHTML::_('grid.id', $i, $row->id);
		$link 		= JRoute::_('index.php?option=com_stalker&controller=stalkgrp&task=edit&cid[]='. $row->id);

        ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $this->pagination->getRowOffset($i); ?>
            </td>
			<td>
			    <?php echo $checked; ?>
			</td>
			<td>
			    <a href="<?php echo $link; ?>"><?php echo $row->name; ?></a>
			</td>
            <td>
                <?php echo $row->id; ?>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
    }
?>
    </table>
</div>
 
<input type="hidden" name="option" value="com_stalker" />
<input type="hidden" name="view" value="stalkgrps" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="stalkgrp" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="" />

</form>
