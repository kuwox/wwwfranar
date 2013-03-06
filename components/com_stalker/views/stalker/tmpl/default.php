<?php
/**
 * Default View for Stalker Component Front-end
 * 
 * @package    	Stalker
 * @subpackage 	Components
 * @link 		http://www.nicktexidor.com/
 * @license     GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access'); 

?>
<div class="componentheading">
	<?php echo $this->pageTitle; ?>
</div>

<div id="comstalker">
  <div id="comstalker<?php echo $this->align ?>">
    <ul>
<?php
	$img_path = "media/stalker/icons/" . $this->imageset . "/";

    for ($i=0, $n=count($this->stalker); $i < $n; $i++)
   	{
      	$row 			=& $this->stalker[$i];
		$url	 		= str_replace("#id#", $row->username, $row->socneturl);
		$iid 			= str_replace(" ", "", $row->socnet);
		$linktitle		= (is_null($row->linktitle) || strlen(trim($row->linktitle)) == 0) ? $row->socnet . ": " . $row->username : $row->linktitle;
		$imagealt		= (is_null($row->imagealt) || strlen(trim($row->imagealt)) == 0) ? $row->socnet . ": " . $row->username : $row->imagealt;

		if (strlen(trim($row->target)) == 0) {
			$target = "_blank";
		} else {
			$target = $row->target;
		}

		switch($this->style) {
			case 2:						
				echo '<li class="' . $this->align . 'withtext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '" >' . $row->socnet . '</a></li>';
				break;
			case 1:
				if ($this->align == "right") {
						echo '<li class="' . $this->align . 'withtext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . $row->socnet . '</a> <a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . JHTML::image($img_path . $row->image, $imagealt, 'width="' . $this->iconsize . '" height="' . $this->iconsize . '" id="' . $iid . '" ') . '</a></li>';
					} else {
						echo '<li class="' . $this->align . 'withtext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . JHTML::image($img_path . $row->image, $imagealt, 'width="' . $this->iconsize . '" height="' . $this->iconsize . '" id="' . $iid . '" ') . '</a> <a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . $row->socnet . '</a></li>';
					}
				break;
			default:
				echo '<li class="' . $this->align . 'notext"><a href="' . $url . '" rel="nofollow" title="' . $linktitle . '" target="' . $target . '">' . JHTML::image($img_path . $row->image, $imagealt, 'width="' . $this->iconsize . '" height="' . $this->iconsize . '" id="' . $iid . '" ') . '</a></li>';
				break;
		}
	}

?>
	</ul>
  </div>
  <div class="clear"></div>
</div>
<?php
