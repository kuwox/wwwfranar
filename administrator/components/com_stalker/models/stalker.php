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

class StalkersModelStalker extends JModel
{
	/**
	 * Constructor that retrieves the ID from the request
	 *
	 * @access    public
	 * @return    void
	 */
	function __construct()
	{
	    parent::__construct();
 
	    $array = JRequest::getVar('cid',  0, '', 'array');
	    $this->setId((int)$array[0]);
	}


	/**
	 * Method to set the stalker identifier
	 *
	 * @access    public
	 * @param    int Stalker identifier
	 * @return    void
	 */
	function setId($id)
	{
	    // Set id and wipe data
	    $this->_id    	= $id;
	    $this->_data    = null;
	}


	/**
	 * Method to get a stalker
	 * @return object with data
	 */ 
	function &getData()
	{
	    // Load the data
	    if (empty( $this->_data )) {
	        $query = " SELECT s.*, sn.name AS socnet, sn.url AS socneturl
	        		   FROM #__stalker AS s
	        		   LEFT JOIN #__stalker_socnets AS sn ON sn.id = s.socnetid
	                   WHERE s.id = " . (int) $this->_id
			;

	        $this->_db->setQuery( $query );
	        $this->_data = $this->_db->loadObject();
	    }

	    if (!$this->_data) {
	        $this->_data 			= new stdClass();
	        $this->_data->id 		= 0;
	        $this->_data->socnetid 	= 0;
	        $this->_data->groupid 	= 0;
	        $this->_data->username 	= null;
	        $this->_data->socnet 	= null;
	        $this->_data->published = null;
	        $this->_data->ordering 	= 0;
	        $this->_data->target 	= null;
	        $this->_data->image 	= null;
	        $this->_data->linktitle	= null;
	        $this->_data->imagealt	= null;
	    }

	    return $this->_data;
	}


	/**
	 * Method to get list of social networks
	 * @return object with data
	 */ 
	function getSocnetData()
	{
		// Build social network select list
	    $query = " SELECT *
	    		   FROM #__stalker_socnets
	    		   ORDER BY name "
		;

		$this->_db->setQuery($query);

		if (!$this->_db->query()) {
    	    $this->setError($this->_db->getErrorMsg());
    	    return false;
		}

		return $this->_db->loadObjectList();
	}


	/**
	 * Method to get list of stalker groups
	 * @return object with data
	 */ 
	function getStalkgrpData()
	{
		// Build social network select list
	    $query = " SELECT *
	    		   FROM #__stalker_groups
	    		   ORDER BY name "
		;

		$this->_db->setQuery($query);

		if (!$this->_db->query()) {
    	    $this->setError($this->_db->getErrorMsg());
    	    return false;
		}

		return $this->_db->loadObjectList();
	}


	/**
	 * Method to store a record
	 *
	 * @access    public
	 * @return    boolean    True on success
	 */
	function store()
	{
 	   	$row 	=& $this->getTable();
 	
    	$data 	= JRequest::get('post');

    	// Bind the form fields to the hello table
    	if (!$row->bind($data)) {
    	    $this->setError($this->_db->getErrorMsg());
    	    return false;
    	}
 
		// if new item, order last in appropriate group
		if (!$row->id) {
			$where = '';
			$row->ordering = $row->getNextOrder($where);
		}

    	// Make sure the hello record is valid
    	if (!$row->check()) {
    	    $this->setError($this->_db->getErrorMsg());
    	    return false;
    	}
 
  	  	// Store the web link table to the database
  	  	if (!$row->store()) {
  	      	$this->setError($this->_db->getErrorMsg());
     	   	return false;
    	}
 
	    return true;
	}


	/**
	 * Method to delete record(s)
	 *
	 * @access    public
	 * @return    boolean    True on success
	 */
	function delete()
	{
	    $cids 	= JRequest::getVar('cid', array(0), 'post', 'array');
	    $row 	=& $this->getTable();
 
	    foreach($cids as $cid) {
	        if (!$row->delete($cid)) {
	            $this->setError($row->getErrorMsg());
	            return false;
	        }
	    }
 
	    return true;
	}


	/**
	 * Method to publish/unpublish record(s)
	 *
	 * @access    public
	 * @return    integer    Number of records updated
	 */
	function publish($task)
	{
		$cid = JRequest::getVar('cid', array(), 'request', 'array');
		
		if ($task == 'publish') {
			$publish = 1;
		} else {
			$publish = 0;
		}
		
		$table =& JTable::getInstance('stalker', 'Table');
		
		$table->publish($cid, $publish);
		
		return count($cid);
	}


	/**
	 * Method to move an item up or down in the list
	 *
	 * @access    public
	 * @return    boolean   success or not!
	 */
	function move($direction)
	{
		$row =& $this->getTable();

		if (!$row->load($this->_id)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		if (!$row->move($direction, ' published >= 0 ')) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		return true;
	}


	/**
	 * Method to save order of record(s)
	 *
	 * @access    public
	 * @return    boolean   success or not!
	 */
	function saveorder($cid = array(), $order)
	{
		$row 		=& $this->getTable();
		$groupings 	= array();

		// update ordering values
		for($i=0; $i < count($cid); $i++)
		{
			$row->load((int) $cid[$i]);

			if ($row->ordering != $order[$i]) {
				$row->ordering = $order[$i];
				if (!$row->store()) {
					$this->setError($this->_db->getErrorMsg());
					return false;
				}
			}
		}

		return true;
	}
}