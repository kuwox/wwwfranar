<?php
/**
 * Stalker Controller for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class StalkersControllerStalker extends StalkersController
{
	/**
	 * constructor
	 * @return void
	 */
	function __construct()
	{
	    parent::__construct();

	    // Register Extra tasks
	    $this->registerTask('add', 			'edit');
	    $this->registerTask('apply', 		'save');
		$this->registerTask('unpublish',	'publish');
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
	    JRequest::setVar('view', 'stalker');
	    JRequest::setVar('layout', 'form');
	    JRequest::setVar('hidemainmenu', 1);

	    parent::display();
	}


	/**
	 * save a record
	 * @return void
	 */
	function save()
	{
	    $model = $this->getModel('stalker');

		$data = JRequest::get('post');
		$id = $data['id'];

		switch (JRequest::getCmd('task'))
		{
			case 'apply':
				if ($model->store()) {
			        $msg = JText::_('OK_APPLY_STALKER');
				} else {
					$msg = JText::_('ERROR_APPLY_STALKER');
					$msg_queue	 = $mainframe->getMessageQueue();
					$msg		.= $msg_queue['message'];
				}

				$link = 'index.php?option=com_stalker&controller=stalker&task=edit&cid[]=' . $id;
				break;
			case 'save':
			default:
			    if ($model->store()) {
			        $msg = JText::_('OK_SAVE_STALKER');
	    		} else {
	        		$msg = JText::_('ERROR_SAVE_STALKER');
	        		$msg_queue	 = $mainframe->getMessageQueue();
					$msg		.= $msg_queue['message'];
	    		}
 
				$link = 'index.php?option=com_stalker&view=stalkers';
				break;
		}

	    $this->setRedirect($link, $msg);
	}


	/**
	 * remove record(s)
	 * @return void
	 */
	function remove()
	{
	    $model = $this->getModel('stalker');

	    if($model->delete()) {
	        $msg = JText::_('OK_DELETE_STALKER');
	    } else {
	        $msg = JText::_('ERROR_DELETE_STALKER');
	    }
 
	    $this->setRedirect('index.php?option=com_stalker', $msg);
	}


	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
	    $msg = JText::_('OPCANCELLED');
	    $this->setRedirect('index.php?option=com_stalker', $msg);
	}


	/**
	 * (un)publish records
	 * @return void
	 */
	function publish()
	{
	    $model 	= $this->getModel('stalker');
	    
	    $recs 	= $model->publish($this->getTask());

		$item 	= ($recs > 1) ? ' Items ' : ' Item ';
		
		$action = ucfirst($this->getTask()) . 'ed';

		$this->setMessage($recs . $item . $action);

		$this->setRedirect('index.php?option=' . JRequest::getCmd('option'));
	}


	/**
	 * Move record up
	 * @return void
	 */
	function orderup()
	{
		$model = $this->getModel('stalker');
		$model->move(-1);

	    $this->setRedirect('index.php?option=com_stalker');
	}


	/**
	 * Move record down
	 * @return void
	 */
	function orderdown()
	{
		$model = $this->getModel('stalker');
		$model->move(1);

	    $this->setRedirect('index.php?option=com_stalker');
	}


	/**
	 * Save the order of the list entries
	 * @return void
	 */
	function saveorder()
	{
		$cid 	= JRequest::getVar('cid', array(), 'post', 'array');
		$order 	= JRequest::getVar('order', array(), 'post', 'array');
		JArrayHelper::toInteger($cid);
		JArrayHelper::toInteger($order);

		$model = $this->getModel('stalker');
		$model->saveorder($cid, $order);

		$msg = JText::_('ORDERSAVED');

	    $this->setRedirect('index.php?option=com_stalker', $msg);
	}

}
