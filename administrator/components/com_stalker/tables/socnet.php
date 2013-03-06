<?php
/**
 * Socnet table class
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');

class TableSocnet extends JTable
{
    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
 
    /**
     * @var string
     */
    var $name = null;
 
    /**
     * @var string
     */
    var $url = null;
 
    /**
     * Constructor
     *
     * @param object Database connector object
     */
    function TableSocnet(&$db) {
        parent::__construct('#__stalker_socnets', 'id', $db);
    }
}
