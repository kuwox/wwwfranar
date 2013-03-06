<?php
/**
 * Socnet View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// no direct access

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StalkersViewSocnet extends JView
{
    /**
     * Stalker view display method
     * @return void
     **/
    function display($tpl = null)
    {
	    //get the Stalker record
    	$socnet       	=& $this->get('Data');
    	$isNew       	= ($socnet->id < 1);
 
	    $text 			= $isNew ? JText::_('NEW') : JText::_('EDIT');
    	JToolBarHelper::title(JText::_('SOCNETTITLE') . ': <small><small>[ ' . $text . ' ]</small></small>');
   	 	JToolBarHelper::save();

		if ($isNew) {
        	JToolBarHelper::cancel();
	    } else {
	        // for existing items the button is renamed `close`
    	    JToolBarHelper::cancel('cancel', 'Close');
	    }

	    $this->assignRef('socnet', $socnet);

	    parent::display($tpl);
    }
}