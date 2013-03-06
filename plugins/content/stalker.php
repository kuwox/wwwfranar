<?php
/***********************************************************************************
 * Stalker plugin
 *
 * @version		V1.2.0
 * @author		Nick Texidor <nick@texidor.com>
 * @link		http://www.nicktexidor.com
 * @copyright 	Copyright (C) 2008-2010 Nick Texidor. All rights reserved.
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU/GPL 
 * 
 * Stalker is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Stalker is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Stalker.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * See VERSIONS.TXT for full version history
 *
 **********************************************************************************/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.plugin.plugin');

class plgContentStalker extends JPlugin
{
	function plgContentStalker( &$subject, $params )
    {
    	parent::__construct( $subject, $params );
	}

	function onPrepareContent( &$article, &$params, $limitstart )
	{
		global $mainframe;

        // simple performance check to determine whether bot should process further
        if ( JString::strpos( $article->text, 'stalker' ) === false ) {
        	return true;
		}
 
        // expression to search for
        $regex = '/{stalker\s*.*?}/i';
 
        // check whether plugin has been unpublished
        if ( !$this->params->get( 'enabled', 1 ) ) {
        	$article->text = preg_replace( $regex, '', $article->text );
            return true;
		}
 
        // find all instances of plugin and put in $matches
        preg_match_all( $regex, $article->text, $matches );
 
        // Number of plugins
        $count = count( $matches[0] );

        // plugin only processes if there are any instances of the plugin in the text
        if ($count) {
	        // if there is an instance of the plugin, then copy in the stylesheet
			JHTML::stylesheet('stalker.css', 'plugins/content/stalker/css/', '');

        	// Get plugin parameters
            //$txtlinks = $this->params->def( 'txtlinks', 0 );

            $this->_process( $article, $matches, $count, $regex); //, $txtlinks );
		}
	}

	// The proccessing function
//    protected function _process( &$row, &$matches, $count, $regex) //, $txtlinks )
    function _process(&$row, &$matches, $count, $regex)
    {
		for ( $i=0; $i < $count; $i++ )
        {
			// Strip off the plugin name to leave the parameters
        	$left = str_replace('stalker', '', $matches[0][$i]);
            $left = str_replace('{', '', $left);
            $left = str_replace('}', '', $left);
            $left = trim($left);
 
			// Create an array of parameters from the remainder of the plugin code
 			$params = explode(" ", $left);

			$plgparams = null;

			// Loop through the array or parameters, and create an array of key/value pairs
		    foreach ($params as $param)
			{
				list($key, $val) = explode("=", $param);

				// Trim the whitespace & hard-spaces from parameters
				$key	= trim($key, "\xc2\xa0"); 
				$val	= trim($val, "\xc2\xa0"); 

				// Check to make sure that both a key AND a value exist
				if ((strlen($key) > 0) && (strlen($val) > 0)) 
				{
					$plgparams[$key] = $val;
				}
			}

            $content    = $this->_load( $plgparams, $i); //, $txtlinks );

            $row->text 	= preg_replace( '{'. $matches[0][$i] .'}', $content, $row->text );
		}
 
        // removes tags without matching module positions
        $row->text = preg_replace( $regex, '', $row->text );
	}


	// The function who takes care for the 'completing' of the plugins' actions : retrieving the social network links
//    protected function _load( $plgparams) //, $txtlinks=0 )
    function _load($plgparams, $count)
    {
		// initialize parameters
		$iconsize 	= empty($plgparams['size']) 	? 32 		: (int)$plgparams['size'];
		$style 		= empty($plgparams['style']) 	? "image" 	: $plgparams['style'];
		$group 		= empty($plgparams['group']) 	? "" 		: $plgparams['group'];
		$align 		= empty($plgparams['align']) 	? "left"	: $plgparams['align'];
		$imageset	= empty($plgparams['imageset']) ? "system"	: $plgparams['imageset'];

		// get the base url
		$baseurl 	= JURI::base(true);

		if ($imageset == 'system') {
			$params = &JComponentHelper::getParams('com_stalker');
			$imageset = $params->get('globalimageset', 'default');
		}

		// get the image path for the icons
		$img_path 	= "media/stalker/icons/" . $imageset . "/";

		// A database connection is created
        $db = &JFactory::getDBO();

        if ((int)$group > 0) {
        	$where = " WHERE groupid = " . $group;
        } else {
        	$where = " WHERE groupid = 0";
        }

		$where .= " AND s.published = 1 ";

        // get the list of social networks randomly ordered users 
 		$query = " SELECT s.*, sn.name AS socnet, sn.url AS socneturl, sg.name AS groupname
	        	   FROM #__stalker AS s
	        	   LEFT JOIN #__stalker_socnets AS sn ON sn.id = s.socnetid 
	        	   LEFT JOIN #__stalker_groups  AS sg ON sg.id = s.groupid " .
	        	 $where .
				 " ORDER BY ordering "
        ;

        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();

		$contents  = "";
		$contents .= '<div id="plgstalker">';
		$contents .= '  <div id="plgstalker' . $align . '">';
		$contents .= '    <ul>';

	    for ($i=0, $n=count( $items ); $i < $n; $i++)
    	{
        	$row 			=& $items[$i];
			$url	 		= str_replace("#id#", $row->username, $row->socneturl);
			$iid 			= str_replace(" ", "", $row->socnet);
			$linktitle		= (is_null($row->linktitle) || strlen(trim($row->linktitle)) == 0) ? $row->socnet . ": " . $row->username : $row->linktitle;
			$imagealt		= (is_null($row->imagealt) || strlen(trim($row->imagealt)) == 0) ? $row->socnet . ": " . $row->username : $row->imagealt;
		
			if (strlen(trim($row->target)) == 0) {
				$target = "_blank";
			} else {
				$target = $row->target;
			}

			switch($style) {
				case "text":						
					$contents .= '<li class="' . $align . 'withtext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . $row->socnet . '</a></li>';
					break;
				case "list":
					if ($align == "right") {
						$contents .= '<li class="' . $align . 'withtext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . $row->socnet . '</a> <a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . JHTML::image($img_path . $row->image, $imagealt, 'width="' . $iconsize . '" height="' . $iconsize . '" id="plg' . $count.$iid . '" ') . '</a></li>';
					} else {
						$contents .= '<li class="' . $align . 'withtext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . JHTML::image($img_path . $row->image, $imagealt, 'width="' . $iconsize . '" height="' . $iconsize . '" id="plg' . $count.$iid . '" ') . '</a> <a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . $row->socnet . '</a></li>';
					}
					break;
				default:
					$contents .= '<li class="' . $align . 'notext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . JHTML::image($img_path . $row->image, $imagealt, 'width="' . $iconsize . '" height="' . $iconsize . '" id="plg' . $count.$iid . '" ') . '</a></li>';
					break;
			}
		}

		$contents .= '    </ul>';
		$contents .= '  </div>';
		$contents .= '  <div class="clear"></div>';
		$contents .= '</div>';

        return $contents;
	}
}
