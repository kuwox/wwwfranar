<?php
/**
 * Socnet Controller for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.controller');

class StalkersControllerImport extends StalkersController
{
	/**
	 * constructor
	 * @return void
	 */
	function __construct()
	{
	    parent::__construct();
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
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
	    $msg = JText::_('OPCANCELLED');
	    $this->setRedirect('index.php?option=com_stalker&view=socnets', $msg);
	}


    /**
     * Method to import XML file
     *
     * @access    public
     */
	function import()
	{
		$msg 			= "";
		$imported_file 	= JRequest::getVar('xmlfile', '', 'files', 'array');
		$xmlfile 		= $imported_file['tmp_name'];
		$xmlfileext		= strtolower(JFile::getExt($imported_file['name']));

		if ($xmlfile == "") {
			JError::raiseWarning(100, JText::_('ERROR_IMPORT_NOFILE'));
		} elseif ($xmlfileext != "xml") {
			JError::raiseWarning(100, JText::_('ERROR_IMPORT_INVALID'));
		} else {
			$db =& JFactory::getDBO();

			$xml = new JSimpleXML;
	  		$xml->loadFile($xmlfile);
	
 			$xml = $xml->document;

			foreach($xml->socialnetwork as $socnet) {
				$query = "SELECT count(*) FROM #__stalker_socnets WHERE url = '" . $socnet->url[0]->data() . "'";
				$db->setquery($query);

				$result = $db->loadResult();
			
				if ($result < 1) {
					echo "WRITING: " .$query ."<br /><br />";

					$query = "INSERT INTO `#__stalker_socnets` (`name`, `url`) VALUES ('" . $socnet->name[0]->data() . "', '" . $socnet->url[0]->data() . "')";
					$db->setQuery( $query );
					$db->query();
				} else {
					echo "NOT WRITING " . $socnet->name[0]->data() .", URL ALREADY EXISTS<br /><br />";
				}
		 	}

			$msg = JText::_( 'OK_IMPORT_STALKER' );
		}

		$this->setRedirect( 'index.php?option=com_stalker&view=import', $msg);
	}


	function export()
	{
		$db =& JFactory::getDBO();

		$query = "SELECT * FROM  #__stalker_socnets ORDER BY name";
		$db->setquery($query);
		$rows = $db->loadObjectList();
		$rowcount = count($rows);

		$output = '';

		if ($rowcount > 0) {
			$output = '<?xml version="1.0"?>
<socialnetworks>';

			for ($i = 0; $i < $rowcount; $i++) {
				$row = & $rows[$i];

				$output .= '
	<socialnetwork>
		<name>' . $row->name . '</name>
		<url>' . $row->url . '</url>
	</socialnetwork>
';
			}

			$output .= '
</socialnetworks>';

			$xmlfile = "stalker_social_networks.xml";

			if (ob_get_length()) {
				JError::raiseWarning(100, JText::_('ERROR_EXPORT_DATAOUT'));
			}

			header('Content-Type: application/x-download');

			if (headers_sent()) {
				JError::raiseWarning(100, JText::_('ERROR_EXPORT_DATAOUT'));
			}

			// Output the headers to tell the browser to save the content
			header('Content-Length: ' . strlen($output));
			header('Content-Disposition: attachment; filename="' . $xmlfile . '"');
			header('Cache-Control: private, max-age=0, must-revalidate');
			header('Pragma: public');
			echo $output;
			exit();
		}

		$msg = JText::_( 'OK_EXPORT_STALKER' );
		$this->setRedirect( 'index.php?option=com_stalker&view=import', $msg );
	}

}
?>
