<?php
/**
 * Stalker View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// no direct access

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StalkersViewStalker extends JView
{
    /**
     * Stalker view display method
     * @return void
     **/
    function display($tpl = null)
    {
	    //get the Stalker record
    	$stalker       	=& $this->get('Data');
    	$isNew       	= ($stalker->id < 1);
 
	    $text = $isNew ? JText::_('NEW') : JText::_('EDIT');
    	JToolBarHelper::title(JText::_('STALKERTITLE') . ': <small><small>[ ' . $text . ' ]</small></small>');
   	 	JToolBarHelper::save();
   	 	JToolBarHelper::apply();

		if ($isNew) {
        	JToolBarHelper::cancel();
	    } else {
	        // for existing items the button is renamed `close`
    	    JToolBarHelper::cancel('cancel', 'Close');
	    }

        // build the list of available Social Networks
		$socnetlist[]		= JHTML::_('select.option', '0', JText::_('Select Social Network'), 'socnetid', 'name');
		
        if (($socnets = $this->get('SocnetData')) == false) {
			$lists['socnet']	= null;
		} else {
			$socnetlist			= array_merge($socnetlist, $socnets);
			$lists['socnet']	= JHTML::_('select.genericlist', $socnetlist, 'socnetid', 'class="inputbox" size="1"', 'id', 'name', $stalker->socnetid);
		}

        // build the list of available groups
		$grouplist[]		= JHTML::_('select.option', '0', JText::_('-- None Selected --'), 'groupid', 'name');
		
        if (($stalkgrps = $this->get('StalkgrpData')) == false) {
//			$lists['stalkgrp']	= null;
			$lists['stalkgrp']	= JHTML::_('select.genericlist', $grouplist, 'groupid', 'class="inputbox" size="1"', 'id', 'name', $stalker->groupid);
		} else {
			$grouplist			= array_merge($grouplist, $stalkgrps);
			$lists['stalkgrp']	= JHTML::_('select.genericlist', $grouplist, 'groupid', 'class="inputbox" size="1"', 'id', 'name', $stalker->groupid);
		}

		// build the html select list for ordering
		$query = " SELECT ordering AS value, username AS text 
				   FROM #__stalker
				   WHERE published >= 0
				   ORDER BY ordering "
		;

		if ($isNew) {
			$lists['ordering'] 		= JHTML::_('list.specificordering', $stalker, '', $query);
		} else {
			$lists['ordering'] 		= JHTML::_('list.specificordering', $stalker, $stalker->id, $query);
		}

		$params = &JComponentHelper::getParams('com_stalker');
		$imageset = $params->get('globalimageset', 'default');
	    $this->assignRef('imageset' , $imageset);

		// build the html select list for images
		$lists['image'] 			= JHTML::_('list.images', 'image', $stalker->image, '', '/media/stalker/icons/' . $imageset . "/");


		// build the html radio buttons for published
		$lists['published'] 		= JHTML::_('select.booleanlist', 'published', '', $stalker->published);
	
	    $this->assignRef('stalker' , $stalker);
	    $this->assignRef('lists'   , $lists);

	    parent::display($tpl);
    }
}