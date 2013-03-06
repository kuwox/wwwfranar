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

$msg = 'Wrong data!';
if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
    $db = new ps_DB;

    switch ($action) {
        case 'save':
            if(isset($_REQUEST['profileId']) && isset($_REQUEST['config'])){

                require_once dirname(__FILE__).'/../../../modules/mod_virtuemart_magicslideshow/magicslideshow.module.core.class.php';
                $magictoolClass = 'MagicSlideshowModuleCoreClass';
                $tool = new $magictoolClass;

                $profileId = intval($_REQUEST['profileId']);

                if($profileId != 1) {
                    $profiles = new ps_DB;
                    $profiles->query("SELECT * FROM #__{vm}_magicslideshow_config WHERE id = 1");

                    while($profiles->next_record()){
                        $profile = mz_get_row($profiles);
                        $tool->params->unserialize($profile->config, $profile->profile);
                    }
                }

                $config = array();
                foreach($_REQUEST['config'] as $k => $v) {
                    if(!$tool->params->check($k, $v)) {
                        $config[$k] = $v;
                    }
                }

                $config = $db->getEscaped(mz_serializeProfile($config));

                $query = "UPDATE #__{vm}_magicslideshow_config profile SET config = '$config' WHERE id = $profileId";

                $db->query($query);
                $msg = 'Changes saved!';
            }
            break;
    }
}

mz_redirect($_SERVER['HTTP_REFERER'],$msg);
?>
