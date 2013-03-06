<?php
/**
 * Stalkgrps Model for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class StalkersModelStalkgrps extends JModel
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
	 * Constructor - sets up pagination
	 *
	 * @access    public
	 * @return    void
	 */
	function __construct()
	{
		parent::__construct();

		global $mainframe, $option;

		$varcon = $option . 'stalkgrps.';

		// Get the pagination request variables
		$limit		= $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart	= $mainframe->getUserStateFromRequest($varcon . 'limitstart', 'limitstart', 0, 'int');
		
		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}


    /**
     * Retrieves the social networks data
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
     * Retrieves the total social networks
     * @return array Count of social networks
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
     * Retrieves the social networks pagination data 
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
        $query = " SELECT *
	               FROM #__stalker_groups " .

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

		$varcon = $option . 'stalkgrps.';

		// Get the filter request variables
        $filter_order     = $mainframe->getUserStateFromRequest($varcon . 'filter_order', 		'filter_order', 	'name', 'cmd');
        $filter_order_Dir = $mainframe->getUserStateFromRequest($varcon . 'filter_order_Dir', 	'filter_order_Dir', 'asc', 	'word');
 
		$orderby 	= " ORDER BY " . $filter_order . " " . $filter_order_Dir;

        return $orderby;
	}
}
