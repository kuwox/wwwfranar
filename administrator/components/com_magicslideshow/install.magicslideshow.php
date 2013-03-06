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

defined( '_VM_IS_BACKEND' ) or define( '_VM_IS_BACKEND', '1' );

function com_install(){
    $installed = false;

    if(!file_exists(dirname(__FILE__).'/../com_virtuemart/compat.joomla1.5.php')){
        ?>
        <h1>Files have been successfully copied but you should install VirtueMart in order to complete installation.</h1>
        <h2><a href="http://virtuemart.net/">virtuemart.net</a></h2>
        <?php
    }
    ?>
    <h2>Click <a href="?option=com_magicslideshow&page=magicslideshow.config">here</a> to complete installation.</h2>
    <?php
}


?>
