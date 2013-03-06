<?php
/**
 * Stalkgrp View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// no direct access

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StalkersViewStalkgrp extends JView
{
    /**
     * Stalker Group view display method
     * @return void
     **/
    function display($tpl = null)
    {
	    //get the Stalker record
    	$stalkgrp      	=& $this->get('Data');
    	$isNew       	= ($stalkgrp->id < 1);
 
	    $text 			= $isNew ? JText::_('NEW') : JText::_('EDIT');
    	JToolBarHelper::title(JText::_('STALKGRPTITLE') . ': <small><small>[ ' . $text . ' ]</small></small>');
   	 	JToolBarHelper::save();

		if ($isNew) {
        	JToolBarHelper::cancel();
	    } else {
	        // for existing items the button is renamed `close`
    	    JToolBarHelper::cancel('cancel', 'Close');
	    }

	    $this->assignRef('stalkgrp', $stalkgrp);

	    parent::display($tpl);
    }
}