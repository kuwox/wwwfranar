<?php
/**
 * Socnets View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StalkersViewSocnets extends JView
{
    /**
     * Stalkers view display method
     * @return void
     **/
    function display($tpl = null)
    {
    	global $mainframe, $option;

		$varcon = $option . 'socnets.';

		JToolBarHelper::title(JText::_('SOCNETSTITLE'), 'generic.png');
		JToolBarHelper::custom('import', 'default', 'default', JText::_('Import/Export'), false);
		JToolBarHelper::deleteList('CONFIRMDELETE');
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		// Set up the default ordering
		$filter_order	    = $mainframe->getUserStateFromRequest($varcon . 'filter_order',		'filter_order',		'name',	'cmd');
		$filter_order_Dir	= $mainframe->getUserStateFromRequest($varcon . 'filter_order_Dir',	'filter_order_Dir',	'',		'word');

        // Get data, total & pagination from the model
        $items 		=& $this->get('Data');
        $total 		=& $this->get('Total');
		$pagination =& $this->get('Pagination');

		$lists['order']     = $filter_order;
		$lists['order_Dir'] = $filter_order_Dir;

		$this->assignRef('lists', 		$lists);
        $this->assignRef('items', 		$items);
		$this->assignRef('total',		$total);
        $this->assignRef('pagination',	$pagination);

        parent::display($tpl);
    }
}
