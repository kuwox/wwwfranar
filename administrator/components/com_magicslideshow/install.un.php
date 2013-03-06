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

include_once 'init.php';

isset($INSTALLMODE) or $INSTALLMODE = '';

$msg = array();

//Import joomla libraries
mz_jimport('joomla.filesystem.file');
mz_jimport('joomla.filesystem.folder');
mz_jimport('joomla.filesystem.archive');

switch ($INSTALLMODE) {
    case 'install':

        $prepare_queries = array();
        $create_table_queries = array();
        $alter_table_queries = array();
        $sample_data_insert = array();
        $end_queries = array();

        //Magic Slideshow frontend module installation

        function mz_copyModuleFiles($from, $to) {
            JFolder::copy($from, $to);
            if(!defined('_JEXEC')) {
                // jm 1.0
                JFile::move($to . DS . 'mod_virtuemart_magicslideshow.php', $to . DS.'..'.DS.'mod_virtuemart_magicslideshow.php');
                JFile::move($to . DS . 'mod_virtuemart_magicslideshow_10.xml', $to . DS.'..'.DS.'mod_virtuemart_magicslideshow.xml');
                JFile::delete($to . DS . 'mod_virtuemart_magicslideshow.xml');
                $url = $GLOBALS['mosConfig_live_site'] . '/modules/mod_virtuemart_magicslideshow/core';
            } else {
                JFile::delete($to . DS . 'mod_virtuemart_magicslideshow_10.xml');
                $url = JURI::base() . '/modules/mod_virtuemart_magicslideshow/core';
            }

            $css = $to . DS . 'core' . DS . 'magicslideshow.css';
            $c = file_get_contents($css);
            $url = preg_replace('/https?:\/\/[^\/]+\//is', '/', $url);
            $url = str_replace('administrator/', '', $url);
            $url = str_replace('//', '/', $url);
            $pattern = '/url\(\s*(?:\'|")?(?!'.preg_quote($url, '/').')\/?([^\)\s]+?)(?:\'|")?\s*\)/is';
            $replace = 'url(' . $url . '/$1)';
            $c = preg_replace($pattern, $replace, $c);
            file_put_contents($css, $c);

            return true;
        }


        $mz_modDstPath = join(DS,array(dirname(__FILE__),'..','..','..','modules','mod_virtuemart_magicslideshow'));
        $mz_modFile = join(DS,array(dirname(__FILE__),'module'));

        $mz_clean = array($mz_modDstPath);

        if(!defined('_JEXEC')) {
            $mz_clean = array(
                    $mz_modDstPath,
                    $mz_modDstPath.DS.'..'.DS.'mod_virtuemart_magicslideshow.php',
                    $mz_modDstPath.DS.'..'.DS.'mod_virtuemart_magicslideshow.xml',
            );
        }
        
        //clean folders and file of previous installation
        foreach($mz_clean as $delFile) {
            if(file_exists($delFile)){
                if(is_file($delFile)){
                    JFile::delete($delFile);
                } else
                if(is_dir($delFile)){
                    JFolder::delete($delFile);
                }
            }
        }

        $prepare_queries[] = 'SET FOREIGN_KEY_CHECKS=0';
        $prepare_queries[] = 'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO"';

        $prepare_queries[] = 'DROP TABLE IF EXISTS `#__{vm}_magicslideshow_config`';


        //if(JArchive::extract($mz_modFile,$mz_modDstPath)) {
        if(mz_copyModuleFiles($mz_modFile,$mz_modDstPath)) {
            $msg[]='Magic Slideshow v4.3.15 [v1.0.40:v1.1.18] frontend module installed successfuly';

            $prepare_queries[] = 'DELETE FROM `#__modules_menu` WHERE `moduleid` = (SELECT id FROM `#__modules` WHERE `module` = \'mod_virtuemart_magicslideshow\')';
            $prepare_queries[] = 'DELETE FROM `#__modules` WHERE `module` = \'mod_virtuemart_magicslideshow\'';

            $sample_data_insert[] = 'INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES
            (\'Magic Slideshow v4.3.15 [v1.0.40:v1.1.18] module for Joomla with VirtueMart\', \'\', 0, \'left\', 0, NOW(), 1, \'mod_virtuemart_magicslideshow\', 0, 0, 0, \'use-virtuemart-to-create-image-thumbnails=Yes\nuse-effect-on-product-page=Yes\nuse-effect-on-category-page=Yes\nuse-tool-for-featured-prod-mod=No\nuse-tool-for-latest-prod-mod=No\nuse-tool-for-random-prod-mod=No\n\n\', 0, 0)';
            $sample_data_insert[] = 'INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(),0)';
        } else {
            $msg[]="Error installing Magic Slideshow v4.3.15 [v1.0.40:v1.1.18] frontend module. Please try to install it manualy ($mz_modFile)";
        }

        //End of Magic Slideshow frontend module installation

        //Set up menu image (for Joomla 1.0.x)
        $end_queries[] = 'UPDATE #__components SET `admin_menu_img`=\'../administrator/components/com_magicslideshow/image/magicslideshow.png\' WHERE `option`=\'com_magicslideshow\'';
        //End



        $create_table_queries[] = 'CREATE TABLE IF NOT EXISTS `#__{vm}_magicslideshow_config` (
          `id` int(11) NOT NULL auto_increment COMMENT \'default profile should have id = 1\',
          `profile` varchar(32) character set utf8 NOT NULL,
          `config` text character set utf8 NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0';



        $sample_data_insert[] = "INSERT IGNORE INTO `#__{vm}_magicslideshow_config` (`id`, `profile`, `config`) VALUES
        (1, 'default', ''),
        (2, 'browse', 'show-message:No;zoom-position:inner;click-to-activate:true;message:Click to zoom;multiple-images:No'),



        (3, 'details', 'enable-effect:Yes;'),

        (4, 'latest', 'show-message:No;opacity-reverse:true;use-original-vm-thumbnails:Yes'),
        (5, 'featured', 'show-message:No;opacity-reverse:true;use-original-vm-thumbnails:Yes'),
        (6, 'random', 'show-message:No;opacity-reverse:true;use-original-vm-thumbnails:Yes'),
        (7, 'custom', '')";



        $queries = array_merge($prepare_queries,$create_table_queries,$alter_table_queries,$sample_data_insert,$end_queries);

        $db = new ps_DB;
        foreach($queries as $q) {
            $db->query($q);
        }

        JFile::move(__FILE__, dirname(__FILE__).DS.'install.un.php');
        if(defined('_JEXEC')) {
            JFile::move(dirname(__FILE__).DS.'magicslideshow_10.xml', dirname(__FILE__).DS.'magicslideshow_10_xml.back');
        }

        echo "<h2>Magic Slideshow component installed successfully.</h2>";
        echo '<p>'.join("</p><p>",$msg).'</p>';
        echo "<h2>Press F5 to refresh the page.</h2>";
        break;

    case 'uninstall';

        $tables = array('magicslideshow_config');


        //if VirtueMart is still installed using their DB class
        if(class_exists('ps_DB')) {
            $db = new ps_DB;
            $dbvmprefix = '#__{vm}';
            $dbprefix = '#__';

        } else if(class_exists('JFactory')) {
            //if Joomla 1.5
            $db = JFactory::getDBO();
            $CONFIG = new JConfig();
            $dbvmprefix = $CONFIG->dbprefix.'vm';
            $dbprefix = $CONFIG->dbprefix;

        } else {
            //if Joomla 1.0.x
            global $database, $mosConfig_dbprefix;

            $db = $database;
            $dbvmprefix = $mosConfig_dbprefix.'vm';
            $dbprefix = $mosConfig_dbprefix;
        }

        foreach($tables as $t) {
            $db->setQuery( "DROP TABLE `{$dbvmprefix}_{$t}`;" );
            $db->query();
        }

        $db->setQuery("SELECT id FROM `{$dbprefix}modules` WHERE `module` = 'mod_virtuemart_magicslideshow'");
        $db->query();

        $row = mz_get_row($db);
        $module_id = $row->id;

        if($module_id && JFolder::delete($mosConfig_absolute_path.DS.'modules'.DS.'mod_virtuemart_magicslideshow')) {
            file_exists($mosConfig_absolute_path.DS.'modules'.DS.'mod_virtuemart_magicslideshow.xml') &&
                JFile::delete($mosConfig_absolute_path.DS.'modules'.DS.'mod_virtuemart_magicslideshow.xml');
            file_exists($mosConfig_absolute_path.DS.'modules'.DS.'mod_virtuemart_magicslideshow.php') &&
                JFile::delete($mosConfig_absolute_path.DS.'modules'.DS.'mod_virtuemart_magicslideshow.php');

            $db->setQuery("DELETE FROM `{$dbprefix}modules` WHERE `id` = $module_id");
            $db->query();
            $db->setQuery("SELECT id FROM `{$dbprefix}modules_menu` WHERE `moduleid` = $module_id");
            $db->query();

            echo "<h2>Magic Slideshow component uninstalled. Frontend module removed</h2>";
        } else {
            echo "<h2>Magic Slideshow component uninstalled, please uninstall 'Magic Slideshow' module manualy.</h2>";
        }

        break;
    default:
        echo "<h2>Installation mode is not set. Nothing done.</h2>";
        break;
}
