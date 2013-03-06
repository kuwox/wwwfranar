<?php
/**
 * Import/Export View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StalkersViewImport extends JView
{
    /**
     * Import/Export view display method
     * @return void
     **/
	function display($tpl = null)
	{
        JToolBarHelper::title(JText::_('IMPORTTITLE'), 'generic.png');
   	    JToolBarHelper::cancel();

		parent::display($tpl);
	}
}
