<?php
/**
 * Stalker Model for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// No direct access 
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.model');

class StalkerModelStalker extends JModel
{
    /**
     * Stalkers data array
     *
     * @var array
     */
    var $_data;

    /**
     * Retrieves the stalker data
     * @return array Array of objects containing the data from the database
     */
    function getData($group)
    {
        // if data hasn't already been obtained, load it
        if (empty($this->_data)) {
            $query 			= $this->_buildQuery($group);
            $this->_data 	= $this->_getList($query);
        }
 
        return $this->_data;
    }

    /**
     * Construct the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery($group)
    {
        if ((int)$group > 0) {
        	$where = " WHERE groupid = " . $group;
        } else {
        	$where = " WHERE groupid = 0";
        }

		$where .= " AND s.published = 1 "; // Oops!!!  Thanks Gruz!

    	$query = " SELECT s.*, sn.name AS socnet, sn.url AS socneturl, sg.name AS groupname
	        	   FROM #__stalker AS s
	        	   LEFT JOIN #__stalker_socnets AS sn ON sn.id = s.socnetid 
	        	   LEFT JOIN #__stalker_groups  AS sg ON sg.id = s.groupid " .
	        	 $where . 
	        	 " ORDER BY ordering"
        ;

        return $query;
    }
}
