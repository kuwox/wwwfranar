<?php
/**
 * Stalker Install Controller
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */
 
// No direct access 
defined('_JEXEC') or die('Restricted access');

class StalkersControllerStalkerinstall extends StalkersController
{
	/**
	 * constructor
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask('install', 'install');
		$this->registerTask('upgrade', 'upgrade');		
	}


	/**
	 * install (create tables, dropping them if required, then load default data)
	 * @return void
	 */
	function install()
	{
		$msg 		= '';

		// Create tables, dropping them first if they exist
		$msg 		.= $this->create_stalker(true);
		$msg 		.= $this->create_stalker_socnets(true);
		$msg 		.= $this->create_stalker_groups(true);

		// Check tables are all created and ok!
		$msg 		.= $this->check_table('stalker');
		$msg 		.= $this->check_table('stalker_socnets');
		$msg 		.= $this->check_table('stalker_groups');

		// Load default data
		$msg 		.= $this->load_data_stalker_socnets();

		if (strlen(trim($msg)) > 0) {
			$msg = JText::_('ERROR_INSTALL') . '<br /><br />' . $msg;
		} else {
			$msg = JText::_('OK_INSTALL');
		}

		$this->setRedirect('index.php?option=com_stalker', $msg);
	}


	/**
	 * install (create tables, dropping them if required, then load default data)
	 * @return void
	 */
	function upgrade()
	{
		$msg 		= '';

		// Create tables if they don't already exist
		$msg 		.= $this->create_stalker();
		$msg 		.= $this->create_stalker_socnets();
		$msg 		.= $this->create_stalker_groups();

		// Upgrade tables if they need it
		$msg 		.= $this->upgrade_stalker();
		$msg 		.= $this->upgrade_stalker_socnets();
		$msg 		.= $this->upgrade_stalker_groups();

		// Check tables are all created and ok!
		$msg 		.= $this->check_table('stalker');
		$msg 		.= $this->check_table('stalker_socnets');
		$msg 		.= $this->check_table('stalker_groups');

		// Load default data
		$msg 		.= $this->load_data_stalker_socnets();

		if (strlen(trim($msg)) > 0) {
			$msg = JText::_('ERROR_UPGRADE') . '<br /><br />' . $msg;
		} else {
			$msg = JText::_('OK_UPGRADE');
		}
	
		$this->setRedirect('index.php?option=com_stalker', $msg);
	}


    /**
     * Creates the Stalker table, dropping it if requested
     *
     * @return string Database error messages
     */
	function create_stalker($drop = false)
	{
		$db		=& JFactory::getDBO();
		$msg 	= '';

		if ($drop) {
			$query = "DROP TABLE IF EXISTS `#__stalker`;";

			$db->setQuery($query);

			if (!$db->query()) {
				$msg .= $db->stderr() . '<br />';
			}
		}
 
	    $query = " CREATE TABLE IF NOT EXISTS `#__stalker` (
				   	`id` 					int(11) 	unsigned 	NOT NULL auto_increment,
				 	`socnetid` 				int(11) 				NOT NULL default '0',
				 	`groupid` 				int(11) 				NOT NULL default '0',
				    `username` 				varchar(200) 			NOT NULL default '',
				   	`target` 				varchar(20) 			NOT NULL default '',
				    `image`	 				varchar(100) 			NOT NULL default '',
				    `linktitle`				varchar(200) 			NOT NULL default '',
				    `imagealt`	 			varchar(200) 			NOT NULL default '',
				    `published` 			tinyint(1) 				NOT NULL default '0',
				    `ordering` 				int(11) 				NOT NULL default '0',
				    PRIMARY KEY  			(`id`),
				    KEY `published` 		(`published`)
				   ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8; "
		;
		
		$db->setQuery($query);

		if (!$db->query()) {
			$msg .= $db->stderr() . '<br />';
		}
		
		return $msg;
	}


    /**
     * Creates the Stalker Socnets table, dropping it if requested
     *
     * @return string Database error messages
     */
	function create_stalker_socnets($drop = false)
	{
		$db		=& JFactory::getDBO();
		$msg 	= '';

		if ($drop) {
			$query = "DROP TABLE IF EXISTS `#__stalker_socnets`;";

			$db->setQuery($query);

			if (!$db->query()) {
				$msg .= $db->stderr() . '<br />';
			}
		}
 
	    $query = " CREATE TABLE IF NOT EXISTS `#__stalker_socnets` (
				    `id` 					int(11) 	unsigned 	NOT NULL auto_increment,
				    `name` 					varchar(50) 			NOT NULL default '',
				    `url` 					varchar(200) 			NOT NULL default '',
				    PRIMARY KEY  			(`id`)
				   ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8; "
		;
		
		$db->setQuery($query);

		if (!$db->query()) {
			$msg .= $db->stderr() . '<br />';
		}

		return $msg;
	}


    /**
     * Creates the Stalker Socnets table, dropping it if requested
     *
     * @return string Database error messages
     */
	function create_stalker_groups($drop = false)
	{
		$db		=& JFactory::getDBO();
		$msg 	= '';

		if ($drop) {
			$query = "DROP TABLE IF EXISTS `#__stalker_groups`;";

			$db->setQuery($query);

			if (!$db->query()) {
				$msg .= $db->stderr() . '<br />';
			}
		}
 
	    $query = " CREATE TABLE IF NOT EXISTS `#__stalker_groups` (
				    `id` 					int(11) 	unsigned 	NOT NULL auto_increment,
				    `name` 					varchar(50) 			NOT NULL default '',
				    PRIMARY KEY  			(`id`)
				   ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8; "
		;
		
		$db->setQuery($query);

		if (!$db->query()) {
			$msg .= $db->stderr() . '<br />';
		}

		return $msg;
	}


    /**
     * Upgrades the Stalker table
     *
     * @return string Database error messages
     */
	function upgrade_stalker()
	{
		$msg 	= "";

		// Check the GroupId exists, add it if it doesn't!
		if (!$this->check_column('stalker', 'groupid', 'socnetid')) {
			$msg = "error adding 'groupid' column to 'stalker' table";
		}

		// v1.1.3: Check the LinkTitle field exists, add it if it doesn't!
		if (!$this->check_column('stalker', 'linktitle', 'image', "varchar(200) NOT NULL default ''")) {
			$msg = "error adding 'linktitle' column to 'stalker' table";
		}

		// v1.1.3: Check the ImageAlt exists, add it if it doesn't!
		if (!$this->check_column('stalker', 'imagealt', 'linktitle', "varchar(200) NOT NULL default ''")) {
			$msg = "error adding 'imagealt' column to 'stalker' table";
		}

		return $msg;
	}


    /**
     * Upgrades the Stalker Socnets table
     *
     * @return string Database error messages
     */
	function upgrade_stalker_socnets()
	{
		$db		=& JFactory::getDBO();
		$msg 	= "";
		
		// Nothing to do yet!

		return $msg;
	}


    /**
     * Upgrades the Stalker Groups table
     *
     * @return string Database error messages
     */
	function upgrade_stalker_groups()
	{
		$db		=& JFactory::getDBO();
		$msg 	= "";
		
		// Nothing to do yet!

		return $msg;
	}



    /**
     * Checks to see if Stalker Socnet table is empty, if it is then we load the default data
     *
     * @return string Database error messages
     */
	function load_data_stalker_socnets()
	{
		$db		=& JFactory::getDBO();
		$msg 	= '';

		$query = "SELECT Count(*) FROM `#__stalker_socnets`;";

		$db->setQuery($query);
		$result = $db->loadResult();

		if ($db->getErrorNum()) {
			$msg .= $db->getErrorMsg() . '<br />';
		}

		if ((strlen(trim($msg)) == 0) && ((int)$result == 0)) {
		    $query = " INSERT INTO `#__stalker_socnets` (`name`, `url`) VALUES
					       ('Bebo', 			'http://www.bebo.com/#id#'),
					  	   ('Blinklist', 		'http://www.blinklist.com/#id#'),
					  	   ('Blogger', 			'http://#id#.blogspot.com'),
					  	   ('Blogmarks', 		'http://blogmarks.net/user/#id#'),
					  	   ('Brightkite', 		'http://brightkite.com/people/#id#'),
					  	   ('del.icio.us', 		'http://del.icio.us/#id#'),
					  	   ('Digg', 			'http://digg.com/users/#id#'),
					  	   ('Diigo', 			'http://www.diigo.com/profile/#id#'),
					 	   ('Facebook',			'http://www.facebook.com/#id#'),
					 	   ('Facebook Group', 	'http://www.facebook.com/group.php?gid=#id#'),
					 	   ('Facebook Page', 	'http://www.facebook.com/profile.php?id=#id#'),
					 	   ('FeedBurner', 		'http://feeds.feedburner.com/#id#'),
					 	   ('Flickr', 			'http://flickr.com/#id#'),
					 	   ('FriendFeed', 		'http://friendfeed.com/#id#'),
					 	   ('Friendster', 		'http://profiles.friendster.com/#id#'),
					 	   ('Hi5', 				'http://#id#.hi5.com/'),
					 	   ('Hyves', 			'http://#id#.hyves.nl/'),
					 	   ('Jaiku', 			'http://#id#.jaiku.com/'),
					 	   ('Kwippy', 			'http://www.kwippy.com/#id#'),
					 	   ('LastFM', 			'http://www.last.fm/user/#id#'),
					 	   ('LastFM Artist', 	'http://www.last.fm/music/#id#'),
					 	   ('Linked In', 		'http://www.linkedin.com/in/#id#'),
					 	   ('Linked In Group',  'http://www.linkedin.com/group?id=#id#'),
					 	   ('Meet Up', 			'http://www.meetup.com/members/#id#'),
					 	   ('Metacafe', 		'http://www.metacafe.com/channels/#id#/'),
					 	   ('Mister Wong', 		'http://www.mister-wong.com/user/#id#/'),
					 	   ('MySpace', 			'http://myspace.com/#id#'),
					 	   ('Netvibes', 		'http://www.netvibes.com/#id#'),
					 	   ('Newsvine', 		'http://#id#.newsvine.com'),
					 	   ('Ning', 			'http://www.ning.com/#id#'),
					 	   ('Orkut', 			'http://www.orkut.com/Main#Profile.aspx?uid=#id#'),
					 	   ('Photo Bucket', 	'http://photobucket.com/users/#id#'),
					 	   ('Picasa', 			'http://picasaweb.google.com/#id#'),
					 	   ('Plurk', 			'http://plurk.com/user/#id#'),
					 	   ('Qik', 				'http://qik.com/#id#'),
					 	   ('Google Reader', 	'http://www.google.com/reader/shared/#id#'),
					 	   ('Reddit', 			'http://www.reddit.com/user/#id#'),
					 	   ('Simpy', 			'http://www.simpy.com/user/#id#'),
					 	   ('Stumble Upon',		'http://www.stumbleupon.com/stumbler/#id#/'),
					 	   ('Technorati', 		'http://technorati.com/people/technorati/#id#'),
					 	   ('Tumblr', 			'http://#id#.tumblr.com/'),
					 	   ('Twitter', 			'http://twitter.com/#id#'),
					 	   ('Vimeo', 			'http://www.vimeo.com/#id#'),
					 	   ('Vox', 				'http://#id#.vox.com/'),
					 	   ('Xing', 			'http://#id#.xing.com/'),
					 	   ('Xbox Live', 		'http://live.xbox.com/member/#id#'),
					 	   ('YouTube', 			'http://youtube.com/#id#'),
					 	   ('External Link', 	'http://#id#'); "
			;

			$db->setQuery($query);

			if (!$db->query()) {
				$msg .= $db->stderr() . '<br />';
			}
		}

		return $msg;
	}


    /**
     * Checks table ($table) to ensure it exists
     *
     * @return string Database error messages
     */
	function check_table($table)
	{
		$db		=& JFactory::getDBO();
		$msg 	= '';

		$query = " SELECT * 
				   FROM `#__" . $table . "` 
				   LIMIT 1; "
		;

		$db->setQuery($query);

		$result = $db->loadResult();

		if ($db->getErrorNum()) {
			$msg = $db->getErrorMsg() . '<br />';
		}

		return $msg;
	}


	function check_column($table, $newcolumn, $newcolumnafter, $newcolumntype = "int(11) 				NOT NULL default '0'")
	{
		$db				=& JFactory::getDBO();
		$msg 			= '';
		$foundcolumn	= false;

		$query 			= " SHOW COLUMNS 
						    FROM `#__" . $table . "`; "
		;

		$db->setQuery($query);

		if (!$db->query()) {
			return false;
		}

		$columns 		= $db->loadObjectList();

		foreach ($columns as $column) {
			if ($column->Field == $newcolumn) {
				$foundcolumn = true;
				break;
			}
		}

		if (!$foundcolumn) {
			$query 			= " ALTER TABLE `#__" . $table . "` 
							    ADD `" . $newcolumn . "` " . $newcolumntype
			;

			if (strlen(trim($newcolumnafter)) > 0) {
				$query		.= " AFTER `" . $newcolumnafter . "`";
			}

			$query .= ";";
			
			$db->setQuery($query);

			if (!$db->query()) {
				return false;
			}
		}

		return true;
	}
}