<?php
/**
 * Stalker table class
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

class TableStalker extends JTable
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
    var $socnetid = null;
 
    /**
     * @var string
     */
    var $groupid = null;
 
    /**
     * @var string
     */
    var $username = null;
 
    /**
     * @var string
     */
    var $target = null;
 
    /**
     * @var string
     */
    var $image = null;
 
     /**
     * @var string
     */
    var $linktitle = null;
 
    /**
     * @var string
     */
    var $imagealt = null;
 
   /**
     * @var boolean
     */
    var $published = true;
 
    /**
     * @var int
     */
    var $ordering = 0;
 
    /**
     * Constructor
     *
     * @param object Database connector object
     */
    function TableStalker(&$db) {
        parent::__construct('#__stalker', 'id', $db);
    }
}
