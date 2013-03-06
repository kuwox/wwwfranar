<?php
/**
 * StalkGrp Controller for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.controller');

class StalkersControllerStalkgrp extends StalkersController
{
	/**
	 * constructor
	 * @return void
	 */
	function __construct()
	{
	    parent::__construct();

	    // Register Extra tasks
	    $this->registerTask('add', 'edit');
	}

    /**
     * Method to display the view
     *
     * @access    public
     */
    function display()
    {
        parent::display();
    }
 
	/**
	 * display the edit form
	 * @return void
	 */
	function edit()
	{
	    JRequest::setVar('view', 'stalkgrp');
	    JRequest::setVar('layout', 'form');
	    JRequest::setVar('hidemainmenu', 1);

	    parent::display();
	}

	/**
	 * save a record and return to list
	 * @return void
	 */
	function save()
	{
	    $model = $this->getModel('stalkgrp');
 
	    if ($model->store()) {
	        $msg = JText::_('OK_SAVE_STALKGRP');
	    } else {
	        $msg = JText::_('ERROR_SAVE_STALKGRP');
	    }
 
	    $this->setRedirect('index.php?option=com_stalker&view=stalkgrps', $msg);
	}

	/**
	 * remove record(s) and return to list
	 * @return void
	 */
	function remove()
	{
	    $model = $this->getModel('stalkgrp');

	    if($model->delete()) {
	        $msg = JText::_('OK_DELETE_STALKGRP');
	    } else {
	        $msg = JText::_('ERROR_DELETE_STALKGRP');
	    }
 
	    $this->setRedirect('index.php?option=com_stalker&view=stalkgrps', $msg);
	}

	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
	    $msg = JText::_('OPCANCELLED');
	    $this->setRedirect('index.php?option=com_stalker&view=stalkgrps', $msg);
	}
}
