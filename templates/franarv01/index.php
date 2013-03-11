<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = null;
if (isset($this))
  $document = & $this;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!-- Inicio CSS para anicacion jquery -->
     <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/franarv01/css/mainCSS.css" media="screen" />
 <!-- Fin CSS para anicacion jquery -->
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
 <!-- Inicio Script de para animacion jquery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/franarv01/css/mainFunctions.js"></script>
<!-- Fin Script de para animacio jquery -->
</head>
<body>


<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body">
<div class="art-header">
    <div class="art-header-jpeg"></div>
    <div class="art-header-jguery">
    <!-- Inicio codigo html para animacion jquery -->
<div class="sliderContainer">
      <div id="slider">

          <div class="slidesContainer">
          <div class="slide"><img src="http://www.franar.com.ve/templates/franarv01/images/headermack.png" alt="Mack" /></div>
          <div class="slide"><img src="http://www.franar.com.ve/templates/franarv01/images/headerencava.png" alt="ENCAVA" /></div>
          <div class="slide"><img src="http://www.franar.com.ve/templates/franarv01/images/headeriveco.png" alt="IVECO" /></div>          
          <!--     <div class="slide"><img src="img/img01.png" alt="Coche 01" /></div>
              <div class="slide"><img src="img/img02.png" alt="Coche 02" /></div>
              <div class="slide"><img src="img/img03.png" alt="Coche 03" /></div>
              <div class="slide"><img src="img/img04.png" alt="Coche 04" /></div>
              <div class="slide"><img src="img/img05.png" alt="Coche 05" /></div> -->
          </div> <!-- /slidesContainer -->

      </div> <!-- /slider -->

      </div> <!-- /sliderContainer -->
<!-- Fin codigo html para animacion jquery -->    
    </div>

</div>
<jdoc:include type="modules" name="user3" />
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="art-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'art-block'); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<?php if (artxCountModules($document, 'left')) : ?>
<div class="art-layout-cell art-sidebar1"><?php echo artxModules($document, 'left', 'art-block'); ?>
</div>
<?php endif; ?>
<div class="art-layout-cell art-<?php echo artxGetContentCellStyle($document); ?>">
<!-- BEGIN: JA SLIDER -->

<div id="ja-sliderwrap" class="clearfix">
   <jdoc:include type="modules" name="slider" style="raw" />
</div>

<!-- END: JA SLIDER -->
<?php
  echo artxModules($document, 'banner2', 'art-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'art-article');
  echo artxModules($document, 'banner3', 'art-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner">
<div class="art-postcontent">
    <!-- article-content -->

<jdoc:include type="message" />

    <!-- /article-content -->
</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />
<?php echo artxModules($document, 'banner4', 'art-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'art-article'); ?>
<?php echo artxModules($document, 'banner5', 'art-nostyle'); ?>
</div>
<?php if (artxCountModules($document, 'right')) : ?>
<div class="art-layout-cell art-sidebar2"><?php echo artxModules($document, 'right', 'art-block'); ?>
</div>
<?php endif; ?>

    </div>
</div>
<div class="cleared"></div>

<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'art-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="art-nostyle" />
<div class="art-footer">
 <div class="art-footer-inner">
  <?php echo artxModules($document, 'syndicate'); ?>
  <div class="art-footer-text">
  <?php if (artxCountModules($document, 'copyright') == 0): ?>
<p>Copyright &copy; 2010 ---.<br />
Todos los derechos reservados - Franar C.A.</p>

  <?php else: ?>
  <?php echo artxModules($document, 'copyright', 'art-nostyle'); ?>
  <?php endif; ?>
  </div>
 </div>
 <div class="art-footer-background"></div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer">Creado por: <a href="http://www.twitter.com/kuwox">Juan Spolzino</a>.</p>

</div>

</body> 
</html>
