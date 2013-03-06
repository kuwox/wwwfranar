<?php
/**
 * Stalkgrp table class
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');

class TableStalkgrp extends JTable
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
     * Constructor
     *
     * @param object Database connector object
     */
    function TableStalkgrp(&$db) {
        parent::__construct('#__stalker_groups', 'id', $db);
    }
}
