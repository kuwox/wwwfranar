<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
    <fieldset class="adminform">
        <legend><?php echo JText::_('DETAILS'); ?></legend>
        <table class="admintable">
        <tr>
            <td width="100" align="right" class="key">
                <label for="socnetid">
                    <?php echo JText::_('SOCNET'); ?>:
                </label>
            </td>
            <td>
				<?php echo (is_null($this->lists['socnet'])) ? JText::_('ERROR_NOSOCNETS') : $this->lists['socnet']; ?>
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="socnetid">
                    <?php echo JText::_('GROUP'); ?>:
                </label>
            </td>
            <td>
				<?php echo $this->lists['stalkgrp']; ?>
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="username">
                    <?php echo JText::_('IDENT'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="username" id="username" size="32" maxlength="250" value="<?php echo $this->stalker->username; ?>" />
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="linktitle">
                    <?php echo JText::_('LINKTITLE'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="linktitle" id="linktitle" size="32" maxlength="200" value="<?php echo $this->stalker->linktitle; ?>" />
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="imagealt">
                    <?php echo JText::_('IMAGEALT'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="imagealt" id="imagealt" size="32" maxlength="200" value="<?php echo $this->stalker->imagealt; ?>" />
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="target">
                    <?php echo JText::_('TARGET'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="target" id="target" size="22" maxlength="20" value="<?php echo $this->stalker->target; ?>" />
            </td>
        </tr>
		<tr>
			<td class="key">
				<label for="image">
					<?php echo JText::_('IMAGE'); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->lists['image']; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="preview">
					<?php echo JText::_('PREVIEW'); ?>:
				</label>
			</td>
			<td>
				<script language="javascript" type="text/javascript">
				if (getSelectedValue( 'adminForm', 'image' )!=''){
					jsimg='<?php echo JURI::root(true) ?>/media/stalker/icons/<?php echo $this->imageset ?>/' + getSelectedValue( 'adminForm', 'image' );
				} else {
					jsimg='<?php echo JURI::root(true) ?>/images/M_images/blank.png';
				}
				document.write('<img src=' + jsimg + ' name="imagelib" width="64" height="64" border="2" alt="<?php echo JText::_('Preview'); ?>" />');
				</script>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_('PUBLISHED'); ?>:
			</td>
			<td>
				<?php echo $this->lists['published']; ?>
			</td>
		</tr>
		<tr>
			<td valign="top" class="key">
				<label for="ordering">
					<?php echo JText::_('ORDER'); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->lists['ordering']; ?>
			</td>
		</tr>
    </table>
    </fieldset>
</div>
 
<div class="clr"></div>
 
<input type="hidden" name="option" value="com_stalker" />
<input type="hidden" name="id" value="<?php echo $this->stalker->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="stalker" />
</form>
