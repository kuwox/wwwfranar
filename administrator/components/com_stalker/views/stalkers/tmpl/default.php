<?php defined('_JEXEC') or die('Restricted access');

// Check to see if order of items is on the order column. If it isn't, we disable it.  
$ordering 	= ($this->lists['order'] == 'ordering');
?>

<form id="adminForm" action="<?php echo JRoute::_('index.php');?>" method="post" name="adminForm">
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
	        <th>
	        	<?php echo JHTML::_('grid.sort', JText::_('IDENT'), 'username', $this->lists['order_Dir'], $this->lists['order']); ?>
	        </th>
	        <th>
	        	<?php echo JText::_('ICON'); ?>
	        </th>
	        <th class="sortable">
	        	<?php echo JHTML::_('grid.sort', JText::_('NAME'), 'socnet', $this->lists['order_Dir'], $this->lists['order']); ?>
	        </th>
            <th>
                <?php echo JText::_('LINK'); ?>
            </th>
            <th>
	        	<?php echo JHTML::_('grid.sort', JText::_('GROUP'), 'groupname', $this->lists['order_Dir'], $this->lists['order']); ?>
            </th>
			<th>
				<?php echo JHTML::_('grid.sort', JText::_('ORDER'), 'ordering', $this->lists['order_Dir'], $this->lists['order']); ?>
				<?php echo JHTML::_('grid.order', $this->items ); ?>
			</th>
			<th>
				<?php echo JHTML::_('grid.sort', JText::_('PUBLISHED'), 'published', $this->lists['order_Dir'], $this->lists['order']); ?>
			</th>
			<th>
				<?php echo JHTML::_('grid.sort', JText::_('ID'), 'id', $this->lists['order_Dir'], $this->lists['order']); ?>
			</th>
        </tr>
    </thead>
	<tfoot>
		<tr>
			<td colspan="10"><?php echo $this->pagination->getListFooter(); ?></td>
		</tr>
	</tfoot>
<?php
    $k = 0;

    for ($i=0, $n=count($this->items); $i < $n; $i++)
    {
        $row 			=& $this->items[$i];
		$link 			= JRoute::_('index.php?option=com_stalker&controller=stalker&task=edit&cid[]=' . $row->id);
		$checked 		= JHTML::_('grid.id', $i, $row->id);
		$published		= JHTML::_('grid.published', $row, $i);
		$socurl 		= str_replace("#id#", $row->username, $row->socneturl);
		$linktitle		= (is_null($row->linktitle) || strlen(trim($row->linktitle)) == 0) ? $row->socnet . ": " . $row->username : $row->linktitle;
		$imagealt		= (is_null($row->imagealt) || strlen(trim($row->imagealt)) == 0) ? $row->socnet . ": " . $row->username : $row->imagealt;
?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $this->pagination->getRowOffset($i); ?>
            </td>
			<td>
			    <?php echo $checked; ?>
			</td>
			<td>
			    <a href="<?php echo $link; ?>"><?php echo $row->username; ?></a>
			</td>
			<td align="center">
			    <?php //echo JHTML::_('image.site', $row->image, '../media/stalker/icons/', '', '', $row->socnet . ": " . $row->username, 'width="32" height="32" border="0"'); ?>
			    <?php echo JHTML::image('media/stalker/icons/' . $this->imageset . '/' . $row->image, $imagealt, 'width="32" height="32" border="0"'); ?>
			</td>
            <td>
                <?php echo $row->socnet; ?>
            </td>
            <td>
                <a href="<?php echo $socurl; ?>" title= "<?php echo $linktitle; ?>" target="_blank"><?php echo $socurl; ?></a><br /><?php echo $row->linktitle; ?>
            </td>
            <td>
                <?php echo $row->groupname; ?>
            </td>
			<td class="order">
				<span><?php echo $this->pagination->orderUpIcon($i, true,'orderup', JText::_('MOVE_UP'), $ordering); ?></span>
				<span><?php echo $this->pagination->orderDownIcon($i, $n, true, 'orderdown', JText::_('MOVE_DOWN'), $ordering); ?></span>
                <?php $disabled = $ordering ?  '' : 'disabled="disabled"'; ?>
				<input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" <?php echo $disabled ?> class="text_area" style="text-align: center" />
			</td>
			<td align="center">
				<?php echo $published;?>
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
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="stalker" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="" />

</form>
