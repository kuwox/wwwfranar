<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
    <fieldset class="adminform">
        <legend><?php echo JText::_('DETAILS'); ?></legend>
        <table class="admintable">
        <tr>
            <td width="100" align="right" class="key">
                <label for="name">
                    <?php echo JText::_('GRPNAME'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="name" id="name" size="32" maxlength="40" value="<?php echo $this->stalkgrp->name; ?>" />
            </td>
        </tr>
    </table>
    </fieldset>
</div>
 
<div class="clr"></div>
 
<input type="hidden" name="option" value="com_stalker" />
<input type="hidden" name="id" value="<?php echo $this->stalkgrp->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="stalkgrp" />
</form>
