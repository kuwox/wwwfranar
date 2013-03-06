<?php
/**
 * Custom Installer for Stalker Component
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

function com_install()
{
	$db			=& JFactory::getDBO();
	$notables 	= true;
?>

	<p><div style="position: relative; float: right; margin-right: 40px"><?php echo JHTML::_('image.site', 'stalker_button.png', '/components/com_stalker/assets/images/', NULL, NULL, 'Stalker');?></div>
		Welcome to the new-improved Stalker!!</p>
	<p>The new Stalker Component improves on the old module with many new features:<br />
		- The list of Social Networks can now be imported/exported. If you've added new networks, export them, and send them over to me. I'll collate them and make them available to everyone else!<br />
		- Image Sets can now be applied to Component, Modules & Plugins<br />
		- You can create 'groups' of icons if you want to display more than one Module<br />
		- Unlimited networks & links can be added. If the default links don't cover your needs.. add your own!!<br />
		- Module icons can be ordered YOUR way!<br />
		- Link Titles & Image Alt Tag values can be customised for each link<br />
		- Choose any icon you like for your links. Upload icons to the /media/stalker/icons folder, and they'll appear in the icon list.<br />
		- Specify targets for links<br />
	</p>
	<p>&nbsp;</p>
	<p>Before you start to manage your social networking links, we need to create or update the database tables.</p>

	<p>Checking for stalker table:

<?php
	$query = "SELECT * FROM `#__stalker` LIMIT 1;";

	$db->setQuery($query);
	$result = $db->loadResult();

	if ($db->getErrorNum()) {
		echo '<b><font color="red">not found</font></b><br />';
	} else {
		$notables 	= false;
		echo '<b><font color="green">found</font></b><br />';
	}

	echo "Checking for stalker_socnets table: ";

	$query = "SELECT * FROM `#__stalker_socnets` LIMIT 1;";

	$db->setQuery($query);
	$result = $db->loadResult();

	if ($db->getErrorNum()) {
		echo '<b><font color="red">not found</font></b><br />';
	} else {
		$notables 	= false;
		echo '<b><font color="green">found</font></b><br />';
	}

	echo "Checking for stalker_groups table: ";

	$query = "SELECT * FROM `#__stalker_groups` LIMIT 1;";

	$db->setQuery($query);
	$result = $db->loadResult();

	if ($db->getErrorNum()) {
		echo '<b><font color="red">not found</font></b><br />';
	} else {
		$notables 	= false;
		echo '<b><font color="green">found</font></b><br />';
	}

	if (!$notables) {
?>
		<p><b>Some, or all, tables have been found</b><br /><br />
		<div style="text-align: center;">
		<center><table border="0" cellpadding="10" cellspacing="10">
		<tr>
			<td>Click <a href='index.php?option=com_stalker&amp;controller=stalkerinstall&amp;task=upgrade'><?php
					echo JHTML::_('image.site', 'upgrade_button.png', '/components/com_stalker/assets/images/', NULL, NULL, 'Upgrade Now', 'style="vertical-align: middle"');
				?></a> to <b>keep existing data</b> and upgrade the com_stalker tables
			</td>
		</tr>
		<tr>
			<td>Click <a href='index.php?option=com_stalker&amp;controller=stalkerinstall&amp;task=install'><?php
					echo JHTML::_('image.site', 'install_button.png', '/components/com_stalker/assets/images/', NULL, NULL, 'Install Now', 'style="vertical-align: middle"');
				?></a> to <b>delete existing data</b>, and re-create tables
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><b><font color="red">AND ONCE AGAIN... YOU HAVE BEEN WARNED :^) :</font></b> Choosing the INSTALL option WILL delete all existing Stalker data</td>
		</tr>
		</table></center>
		</div>
<?php
	} else {
?>
		<p><b>No tables found</b><br /><br />
		<div style="text-align: center;">
		<center><table border="0" cellpadding="10" cellspacing="10">
		<tr>
			<td>Click <a href='index.php?option=com_stalker&amp;controller=stalkerinstall&amp;task=install'><?php
					echo JHTML::_('image.site', 'install_button.png', '/components/com_stalker/assets/images/', NULL, NULL, 'Install Now', 'style="vertical-align: middle"');
				?></a> to create tables and complete setup
			</td>
		</tr>
		</table></center>
		</div>
<?php
	}

?>
	<p>&nbsp;</p>
	<p>Don't forget to install the Module & Plug-in to get the most out of Stalker</p>
	<p>Nick Texidor - <a href='http://www.nicktexidor.com' target='_blank'>http://www.nicktexidor.com</a></p>

<?php

}
