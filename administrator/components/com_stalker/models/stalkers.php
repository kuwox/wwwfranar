<?php
/**
 * Stalkers Model for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class StalkersModelStalkers extends JModel
{
    /**
     * Stalkers data array
     *
     * @var array
     */
    var $_data;
    var $_total;
    var $_pagination;


	/**
	 * Constructor that sets up pagination limits
	 *
	 * @access    public
	 * @return    void
	 */
	function __construct()
	{
		parent::__construct();

		global $mainframe, $option;

		$varcon = $option . 'stalkers.';

		// Get the pagination request variables
		$limit		= $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart	= $mainframe->getUserStateFromRequest($varcon . 'limitstart', 'limitstart', 0, 'int');
		
		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}


    /**
     * Retrieves the stalker data
     * @return array Array of objects containing the data from the database
     */
    function getData()
    {
        // if data hasn't already been obtained, load it
        if (empty($this->_data)) {
            $query 			= $this->_buildQuery();
            $this->_data 	= $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
        }
 
        return $this->_data;
    }


    /**
     * Retrieves the total stalker links
     * @return array Count of stalker links
     */
	function getTotal()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_total)) {
			$query 			= $this->_buildQuery();
			$this->_total 	= $this->_getListCount($query);
		}

		return $this->_total;
	}


    /**
     * Retrieves the stalker pagination data 
     * @return array 
     */
	function getPagination()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_pagination)) {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit'));
		}

		return $this->_pagination;
	}


    /**
     * Construct the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery()
    {
    	$query = " SELECT s.*, sn.name AS socnet, sn.url AS socneturl, sg.name AS groupname
	        	   FROM #__stalker AS s
	        	   LEFT JOIN #__stalker_socnets AS sn ON sn.id = s.socnetid 
	        	   LEFT JOIN #__stalker_groups  AS sg ON sg.id = s.groupid " .
	        	 
				 $this->_buildContentOrderBy()
        ;

        return $query;
    }


    /**
     * Construct the order by query
     * @return string The order by to be used to retrieve the rows from the database
     */
	function _buildContentOrderBy()
	{
        global $mainframe, $option;

		$varcon = $option . 'stalkers.';

		// Get the filter request variables
        $filter_order     = $mainframe->getUserStateFromRequest($varcon . 'filter_order', 		'filter_order', 	'ordering', 'cmd');
        $filter_order_Dir = $mainframe->getUserStateFromRequest($varcon . 'filter_order_Dir', 	'filter_order_Dir', 'asc', 		'word');
 
		if ($filter_order == 'ordering') {
			$orderby 	= " ORDER BY " . $filter_order . " " . $filter_order_Dir;
		} else {
	        $orderby 	= " ORDER BY " . $filter_order . " " . $filter_order_Dir . ", ordering ";
		}

        return $orderby;
	}
}
