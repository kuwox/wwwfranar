<?php
/**
 * Default View for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

class StalkerViewStalker extends JView
{
    function display($tpl = null)
    {
		JHTML::stylesheet('stalker.css', 'components/com_stalker/assets/css/', '');

		$params = &JComponentHelper::getParams('com_stalker');

		if($params->get('show_page_title')) {
			$page_title = $params->get('page_title');
		} else {
			$page_title = JText::_('Stalk me....');
		}

		$document =& JFactory::getDocument();
		$document->setTitle($page_title);

		$iconsize		=  $params->get('iconsize', 32);
		$style			=  $params->get('style', 0);
		$position		=  $params->get('position', 'left');
		$group			=  $params->get('stalkergroup', "");
		$imageset 		=  $params->get('imageset', 'default');

	    $model 			= $this->getModel('stalker');
        $stalker 		= $model->getData($group);

		$this->assignRef('pageTitle',	$page_title);
		$this->assignRef('stalker',		$stalker);
		$this->assignRef('style',		$style);
		$this->assignRef('align',		$position);
		$this->assignRef('iconsize',	$iconsize);
		$this->assignRef('imageset',	$imageset);

        parent::display($tpl);
    }
}
