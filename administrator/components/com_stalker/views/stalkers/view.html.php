<?php
/**
 * Stalkers View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StalkersViewStalkers extends JView
{
    /**
     * Stalkers view display method
     * @return void
     **/
    function display($tpl = null)
    {
    	global $mainframe, $option;

		$varcon = $option . 'stalkers.';

        JToolBarHelper::title(JText::_('STALKERSTITLE'), 'generic.png');
//		JToolBarHelper::media_manager( '/' );
		JToolBarHelper::publishList();
		JToolBarHelper::unpublishList();
        JToolBarHelper::deleteList('CONFIRMDELETE');
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();
        JToolBarHelper::preferences('com_stalker', '500');

		$filter_order     	= $mainframe->getUserStateFromRequest($varcon . 'filter_order',		'filter_order',		'ordering',	'cmd');
		$filter_order_Dir 	= $mainframe->getUserStateFromRequest($varcon . 'filter_order_Dir',	'filter_order_Dir',	'',			'word');

        // Get data, total & pagination from the model
        $items 		=& $this->get('Data');
        $total 		=& $this->get('Total');
		$pagination =& $this->get('Pagination');

		$lists['order']     = $filter_order;
		$lists['order_Dir'] = $filter_order_Dir;

		$params = &JComponentHelper::getParams('com_stalker');
		$imageset = $params->get('globalimageset', 'default');

		$this->assignRef('lists', 		$lists);
        $this->assignRef('items', 		$items);
		$this->assignRef('total',		$total);
        $this->assignRef('pagination',	$pagination);
        $this->assignRef('imageset',	$imageset);
 
        parent::display($tpl);
    }
}
