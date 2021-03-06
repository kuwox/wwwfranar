<?php
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.tooltip');
?>
<script type="text/javascript">
function insertLink() {
	var title = document.getElementById("title").value;
	if (title != '') {
		title = "|text="+title;
	}
	var target = document.getElementById("target").value;
	if (target != '') {
		target = "|target="+target;
	}

	var tag = "{phocadownload view=sections"+title+target+"}";

	window.parent.jInsertEditorText(tag, '<?php echo $this->tmpl['ename']; ?>');
	window.parent.document.getElementById('sbox-window').close();
	return false;
}
</script>
<div id="phocadownload-links">
<fieldset class="adminform">
<legend><?php echo JText::_( 'Sections' ); ?></legend>
<form name="adminFormLink" id="adminFormLink">
<table class="admintable" width="100%">
	<tr>
		<td class="key" align="right" width="20%">
			<label for="title">
				<?php echo JText::_( 'Title' ); ?>
			</label>
		</td>
		<td width="80%">
			<input type="text" id="title" name="title" />
		</td>
	</tr>
	<tr >
		<td class="key" align="right">
			<label for="target">
				<?php echo JText::_( 'Target' ); ?>
			</label>
		</td>
		<td>
			<select name="target" id="target">
			<option value="s" selected="selected"><?php echo JText::_( 'Target _self' ); ?></option>
			<option value="b"><?php echo JText::_( 'Target _blank' ); ?></option>
			<option value="t"><?php echo JText::_( 'Target _top' ); ?></option>
			<option value="p"><?php echo JText::_( 'Target _parent' ); ?></option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td align="right"><button onclick="insertLink();"><?php echo JText::_( 'Insert Link' ); ?></button></td>
	</tr>
</table>
</form>

</fieldset>
<div style="text-align:right;margin:20px 5px;"><span class="icon-16-edb-back"><a style="text-decoration:underline" href="<?php echo $this->tmpl['backlink'];?>"><?php echo JText::_('Back')?></a></span></div>
</div>