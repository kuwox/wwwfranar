<?php
/**
 * Import/Export View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<script type="text/javascript">
function settask(task)
{
	var form = document.adminForm;

	form.task.value = task;
	form.submit();
}
</script>

<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div class="col100">
	<fieldset class="adminform">
    	<legend><?php echo JText::_( 'STALKERIMPORT' ); ?></legend>
		<table width="100%" class="admintable" border="0">
		<tr>
			<td width="100" align="right" class="key">
				<label for="xmlfile">
					<?php echo JText::_( 'STALKERIMPORTFILE' ); ?>:
				</label>
			</td>
			<td>
				<input type="file" name="xmlfile" value="" size="30">
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">&nbsp</td>
			<td>
				<input class="button" type="button" id="import" name="import" value="Import Now"  onclick="settask('import');"/>
			</td>
		</tr>
		</table>
	</fieldset>

	<fieldset class="adminform">
		<legend><?php echo JText::_( 'STALKEREXPORT' ); ?></legend>
		<table width="100%" class="admintable" border="0">
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'STALKEREXPORTXML' ); ?>
			</td>
			<td>
				<input class="button" type="button" id="export" name="export" value="Export Now"  onclick="settask('export');"/>
			</td>
		</tr>
		</table>
	</fieldset>
</div>

<input type="hidden" name="option" value="com_stalker" />
<input type="hidden" name="view" value="import" />
<input type="hidden" name="controller" value="import" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="" />

</form>
