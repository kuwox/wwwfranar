<?php
/**
 * Socnet Model for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class StalkersModelSocnet extends JModel
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
	 * @param     int Stalker identifier
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
	    if (empty($this->_data)) {
	        $query = " SELECT * FROM #__stalker_socnets
	                   WHERE id = " . (int) $this->_id
			;

	        $this->_db->setQuery($query);
	        $this->_data = $this->_db->loadObject();
	    }

	    if (!$this->_data) {
	        $this->_data 		= new stdClass();
	        $this->_data->id 	= 0;
	        $this->_data->name 	= null;
	        $this->_data->url 	= null;
	    }

	    return $this->_data;
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

		if (substr($row->url, 0, 4) != "http") {
			$row->url = "http://" . $row->url;
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
}