<?php
defined('_JEXEC') or die('Restricted access');
$user 	=& JFactory::getUser();

$ordering = ($this->lists['order'] == 'a.ordering');

JHTML::_('behavior.tooltip');

?>

<form action="<?php echo $this->request_url; ?>" method="post" name="adminForm">
	<table>
		<tr>
			<td align="left" width="100%"><?php echo JText::_( 'Filter' ); ?>:
				<input type="text" name="search" id="search" value="<?php echo $this->lists['search'];?>" class="text_area" onchange="document.adminForm.submit();" />
				<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
				<button onclick="document.getElementById('search').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
			</td>
			<td nowrap="nowrap">
				<?php
			//	echo $this->lists['state'];
				?>
			</td>
		</tr>
	</table>

	<div id="editcell">
		<table class="adminlist">
			<thead>
				<tr>
					<th width="5"><?php echo JText::_( 'NUM' ); ?></th>
					<th width="5"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" /></th>
					<th class="title" width="70%"><?php echo JHTML::_('grid.sort',  'Username', 'username', $this->lists['order_Dir'], $this->lists['order'] ); ?>
					</th>
					
					<th class="image" width="15%" align="center"><?php echo JText::_( 'PHOCADOWNLOAD_COUNT_USER_FILES_APPROVED' ); ?></th>
					<th class="image" width="15%" align="center"><?php echo JText::_( 'PHOCADOWNLOAD_COUNT_USER_FILES_NOT_APPROVED' ); ?></th>
					
					
					
					<th width="1%" nowrap="nowrap"><?php echo JHTML::_('grid.sort',  'ID', 'a.id', $this->lists['order_Dir'], $this->lists['order'] ); ?>
					</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
				$k = 0;
				for ($i=0, $n=count( $this->items ); $i < $n; $i++)
				{
					$row 			= &$this->items[$i];
					$link 			= JRoute::_( 'index.php?option=com_users&viewuser&task=edit&cid[]='. $row->id );
					$checked 	= JHTML::_('grid.checkedout', $row, $i );
					
				?>
				<tr class="<?php echo "row$k"; ?>">
					<td><?php echo $this->tmpl['pagination']->getRowOffset( $i ); ?></td>
					<td><?php echo $checked; ?></td>
					<td>
						<a href="<?php echo $link; ?>" title="<?php echo JText::_( 'Edit User' ); ?>">
								<?php echo $row->username; ?></a>
					</td>
					
					<td align="center"><?php echo $row->countfaid;?></td>
					<td align="center"><?php echo $row->countfnid;?></td>
					
					<td align="center"><?php echo $row->id; ?></td>
				</tr>
				<?php
				$k = 1 - $k;
				}
			?>
			</tbody>
			
			<tfoot>
				<tr>
					<td colspan="6"><?php echo $this->tmpl['pagination']->getListFooter(); ?></td>
				</tr>
			</tfoot>
		</table>
	</div>

<input type="hidden" name="controller" value="phocadownloaduser" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="" />
</form>