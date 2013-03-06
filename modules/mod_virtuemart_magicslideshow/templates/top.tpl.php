<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magicslideshow - Magic Slideshow for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magicslideshow/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

$m = intval(self::$options->getValue('selectors-margin'));
$wm = intval(self::$options->getValue('thumb-max-width'));
?>

<!-- Begin magicslideshow -->
<div class="MagicToolboxContainer" style="width: <?php echo $wm?>px">
    <?php if(count($thumbs)):?>
        <div id="MagicToolboxSelectors<?php echo $pid?>" class="MagicToolboxSelectorsContainer<?php echo $magicscroll;?>" style="margin-bottom: <?php echo $m;?>px">
            <?php echo join("\n\t",$thumbs)?>
            <div style="clear: both"></div>
        </div>
        <?php if(!empty($magicscroll)): ?>
            <script type="text/javascript">
                MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?> = MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?> || {};
                MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?>.direction = 'right';
                <?php if(self::$options->checkValue('width', 0)): ?>
                MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?>.width = <?php echo $wm?>;
                <?php endif?>
            </script>
        <?php endif?>
    <?php endif?>

    <?php echo $main?>

    <?php if(isset($message)):?>
        <div class="MagicToolboxMessage"><?php echo $message?></div>
    <?php endif?>



</div>
<!-- End magicslideshow -->
