<?php
/*------------------------------------------------------------------------
# JA Larix  for Joomla 1.5 - Version 1.4 - Licence Owner JA130602
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/

defined( '_VALID_MOS' ) or defined('_JEXEC') or die('Restricted access');

if (!defined ('_JA_BASE_MENU_CLASS')) {
	define ('_JA_BASE_MENU_CLASS', 1);

	class JA_Base{
		var $_params = null;
		var $children = null;
		var $open = null;
		var $items = null;
		var $Itemid = 0;
		var $_db = null;
		var $showSeparatedSub = false;

		function JA_Base( &$params ){
			global $Itemid;
			$this->_params = $params;
			$this->Itemid = $Itemid;
			$this->loadMenu();
		}

		function  loadMenu(){
			$this->loadMenu_15();
		}

		function createParameterObject($param, $path='', $type='menu') {
			return new JParameter($param, $path);
		}

		function  loadMenu_10x(){
			global $my, $mosConfig_shownoauth, $mainframe, $database;

			if ($mosConfig_shownoauth) {
				$sql = "SELECT m.* FROM #__menu AS m"
				. "\nWHERE menutype='". $this->getParam( 'menutype' ) ."' AND published='1'"
				. "\nORDER BY parent,ordering";
			} else {
				$sql = "SELECT m.* FROM #__menu AS m"
				. "\nWHERE menutype='". $this->getParam( 'menutype' ) ."' AND published='1' AND access <= '$my->gid'"
				. "\nORDER BY parent,ordering";
			}
			$database->setQuery( $sql );
			$rows = $database->loadObjectList( 'id' );

			// first pass - collect children
			$cacheIndex = array();
			$this->items = array();
			foreach ($rows as $index => $row) {
				if ($row->access <= $my->gid) {
					$pt = $row->parent;
					$list = @ $children[$pt] ? $children[$pt] : array ();

					switch ($row->type) {
						case 'separator':
						case 'component_item_link':
							break;
							
						case 'url':
							if ( eregi( 'index.php\?', $row->link ) ) {
								if ( !eregi( 'Itemid=', $row->link ) ) {
									$row->link .= '&Itemid='. $row->id;
								}
							}
							break;
							
						case 'content_item_link':
						case 'content_typed':
							// load menu params
							$menuparams = $this->createParameterObject( $row->params, $mainframe->getPath( 'menu_xml', $row->type ), 'menu' );
							
							$unique_itemid = $menuparams->get( 'unique_itemid', 1 );
							
							if ( $unique_itemid ) {
								$row->link .= '&Itemid='. $row->id;
							} else {
								$temp = split('&task=view&id=', $row->link);
								
								if ( $row->type == 'content_typed' ) {
									$row->link .= '&Itemid='. $mainframe->getItemid($temp[1], 1, 0);
								} else {
									$row->link .= '&Itemid='. $mainframe->getItemid($temp[1], 0, 1);
								}
							}
							break;

						default:
							$row->link .= '&Itemid='. $row->id;
							break;
					}

					if ( strcasecmp( substr( $row->link,0,4 ), 'http' ) ) {
						$row->link = sefRelToAbs( $row->link );
					}

					$row->url = $row->url = ampReplace( $row->link );
														
					array_push($list, $row);
					$children[$pt] = $list;
				}
				$cacheIndex[$row->id] = $index;
				$this->items[$row->id] = $row;
			}

			$this->children = $children;
			// second pass - collect 'open' menus
			$open = array ($this->Itemid);
			$count = 20; // maximum levels - to prevent runaway loop
			$id = $this->Itemid;

			while (-- $count)
			{
				if (isset($cacheIndex[$id])) {
					$index = $cacheIndex[$id];
					if (isset ($rows[$index]) && $rows[$index]->parent > 0) {
						$id = $rows[$index]->parent;
						$open[] = $id;
					} else {
						break;
					}
				}
			}
			$this->open = $open;
			// $this->items = $rows;
		}

	    function  loadMenu_15(){
    	    $menu = @JMenu :: getInstance();
			if( $menu != '' && strtolower(get_class($menu)) == 'jexception') {
    	    	$menu = @JMenu :: getInstance('site');
    	    }
    	    $user =& JFactory::getUser();
			$children = array ();

			// Get Menu Items
			$items = &JSite::getMenu();
			$rows = $items->getItems('menutype', $this->getParam('menutype'));
    	    // first pass - collect children
    	    $cacheIndex = array();
 		    $this->items = array();
			$aid = $user->get('aid', 0);
   	    	foreach ($rows as $index => $v) {
    		    if ($v->access <= $aid) {
    			    $pt = $v->parent;
    			    $list = @ $children[$pt] ? $children[$pt] : array ();

					switch ($v->type)
					{
						case 'url' :
							if ((strpos($v->link, 'index.php?') !== false) && (strpos($v->link, 'Itemid=') === false)) {
								$v->url = $v->link.'&amp;Itemid='.$v->id;
							} else {
								$v->url = $v->link;
							}
							break;

						default :
							$v->url = 'index.php?Itemid='.$v->id;
							break;
					}
					if (strcasecmp(substr($v->url, 0, 4), 'http') && (strpos($v->link, 'index.php?') !== false)) {
						$iParams = $this->createParameterObject($v->params);
						$iSecure = $iParams->def('secure', 0);
						$v->url = JRoute::_($v->url, true, $iSecure);
					}else{
						//$v->url = urlencode($v->url);
						$v->url = str_replace('&', '&amp;', $v->url);
					}
					array_push($list, $v);
    			    $children[$pt] = $list;
    		    }
    		    $cacheIndex[$v->id] = $index;
				$this->items[$v->id] = $v;
    	    }

            $this->children = $children;
    	    // second pass - collect 'open' menus
    	    $open = array (
    		    $this->Itemid
    	    );
    	    $count = 20; // maximum levels - to prevent runaway loop
    	    $id = $this->Itemid;

    	    while (-- $count)
    	    {
    		    if (isset($cacheIndex[$id])) {
    			    $index = $cacheIndex[$id];
    			    if (isset ($rows[$index]) && $rows[$index]->parent > 0) {
    				    $id = $rows[$index]->parent;
    				    $open[] = $id;
    			    } else {
    				    break;
    			    }
    		    }
    	    }
            $this->open = $open;
		   // $this->items = $rows;
	    }

		function genMenuItem($item, $level = 0, $pos = '', $ret = 0)
		{
			$data = null;
			$tmp = $item;

			if ($tmp->type == 'separator')
			{
				$data = '<a href="#" title=""><span class="separator">'.$tmp->name.'</span></a>';
				if (!$ret) echo $data;
				return $data; 
			}

			// Print a link if it exists
			$active = $this->genClass ($tmp, $level, $pos);

			$id='id="menu' . $tmp->id . '"';
			$iParams = $this->createParameterObject( $item->params );
			//$iParams =& new JParameter($tmp->params);

			$itembg = '';
			if ($this->getParam('menu_images') && $iParams->get('menu_image') && $iParams->get('menu_image') != -1) {
				if ($this->getParam('menu_background')) {
					$itembg = ' style="background:url(images/stories/'.$iParams->get('menu_image').') top left no-repeat;"';
					$txt = '<span>' . $tmp->name . '</span>';
				} else {
					$txt = '<img src="images/stories/'.$iParams->get('menu_image').'" alt="'.$tmp->name.'" title="'.$tmp->name.'" /><span>' . $tmp->name . '</span>';
				}
			} else {
				$txt = '<span>' . $tmp->name . '</span>';
			}
			$title = "title=\"$tmp->name\"";
			if ($tmp->url != null)
			{
				switch ($tmp->browserNav)
				{
					default:
					case 0:
						// _top
						$data = '<a href="'.$tmp->url.'" '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
						break;
					case 1:
						// _blank
						$data = '<a href="'.$tmp->url.'" target="_blank" '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
						break;
					case 2:
						// window.open
						$attribs = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'.$this->getParam('window_open');

						// hrm...this is a bit dickey
						$link = str_replace('index.php', 'index2.php', $tmp->url);
						$data = '<a href="'.$link.'" onclick="window.open(this.href,\'targetWindow\',\''.$attribs.'\');return false;" '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
						break;
				}
			} else {
				$data = '<a '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
			}
			//print($data);
				
			if ($ret) return $data; else echo $data;
		}

		function getParam($paramName, $default=''){
			return $this->_params->get($paramName, $default);
		}

		function setParam($paramName, $paramValue){
			return $this->_params->set($paramName, $paramValue);
		}

		function beginMenu($startlevel=0, $endlevel = 10){
			echo "<div>";
		}
		function endMenu($startlevel=0, $endlevel = 10){
			echo "</div>";
		}

		function beginMenuItems($pid=0, $level=0){
			echo "<ul>";
		}
		function endMenuItems($pid=0, $level=0){
			echo "</ul>";
		}

		function beginMenuItem($mitem=null, $level = 0, $pos = ''){
			echo "<li>";
		}
		function endMenuItem($mitem=null, $level = 0, $pos = ''){
			echo "</li>";
		}

		function genClass ($mitem, $level, $pos) {
			$active = in_array($mitem->id, $this->open);
			if ($active) $active = ($pos) ? "class=\"active $pos-item\"" : "class = \"active\"";
			else $active = ($pos) ? "class=\"$pos-item\"" : "";
				
			return $active;
		}

		function hasSubMenu($level) {
			$pid = $this->getParentId ($level);
			if (!$pid) return false;
			return $this->hasSubItems ($pid);
		}
		function hasSubItems($id){
			if (@$this->children[$id]) return true;
			return false;
		}
		function genMenu($startlevel=0, $endlevel = 10){
			$this->setParam('startlevel', $startlevel);
			$this->setParam('endlevel', $endlevel);
			$this->beginMenu($startlevel, $endlevel);

			if ($this->getParam('startlevel') == 0) {
				//First level
				$this->genMenuItems (0, 0);
			}else{
				//Sub level
				$pid = $this->getParentId($this->getParam('startlevel'));
				if ($pid)
				$this->genMenuItems ($pid, $this->getParam('startlevel'));
			}
			$this->endMenu($startlevel, $endlevel);
		}

		/*
		 $pid: parent id
		 $level: menu level
		 $pos: position of parent
		 */

		function genMenuItems($pid, $level) {
			if (@$this->children[$pid]) {
				$this->beginMenuItems($pid, $level);
				$i = 0;
				foreach ($this->children[$pid] as $row) {
					$pos = ($i == 0 ) ? 'first' : (($i == count($this->children[$pid])-1) ? 'last' :'');

					$this->beginMenuItem($row, $level, $pos);
					$this->genMenuItem( $row, $level, $pos);

					// show menu with menu expanded - submenus visible
					if ($level < $this->getParam('endlevel')) $this->genMenuItems( $row->id, $level+1 );
					$i++;

					if ($level == 0 && $pos == 'last' && in_array($row->id, $this->open)) {
						global $jaMainmenuLastItemActive;
						$jaMainmenuLastItemActive = true;
					}
					$this->endMenuItem($row, $level, $pos);
				}
				$this->endMenuItems($pid, $level);
			}
		}

		function indentText($level, $text) {
			echo "\n";
			for ($i=0;$i<$level;++$i) echo "   ";
			echo $text;
		}

		function getParentId ($level) {
			if (!$level || (count($this->open) < $level)) return 0;
			return $this->open[count($this->open)-$level];
		}

		function getParentText ($level) {
			$pid = $this->getParentId ($level);
			if ($pid) {
				return $this->items[$pid]->name;
			}else return "";
		}

		function genMenuHead () {
		}
	}
}
?>