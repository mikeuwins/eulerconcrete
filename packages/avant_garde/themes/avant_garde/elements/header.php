<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
$pkg = Package::getByHandle('avant_garde'); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php  Loader::element('header_required'); ?>
		<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->getStyleSheet('fonts/fonts.css');?>"  />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->getStyleSheet('typography.css');?>"  />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->getStyleSheet('css/base.css');?>"  />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->getStyleSheet('css/skeleton.css');?>"  />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->getStyleSheet('css/layout.css');?>"  />
		<!--[if lt IE 8]>
			<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->getThemePath()?>/iefix.css"  />
		<![endif]-->
		<script type="text/javascript" src="<?php  echo $this->getThemePath()?>/js/jquery.fitvids.js"></script>
		<script type="text/javascript" src="<?php  echo $this->getThemePath()?>/js/jquery.anystretch.js"></script>
		<script>
		// DOM ready
		$(function() {
	   
		// Create the dropdown base
		$("<select />").appendTo("nav.nav");
      
		// Create default option "Go to..."
		$("<option />", {
			"selected": "selected",
			"value"   : "",
			"text"    : "Go to..."
		}).appendTo("nav.nav select");
      
		// Populate dropdown with menu items
		$("nav.nav a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo("nav.nav select");
		});
      
		// To make dropdown actually work
		// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
		$("nav.nav select").change(function() {
			window.location = $(this).find("option:selected").val();
		});
	 
		});
		</script>
	</head>

<body>
<div class="container"><!-- Start container -->
	<div class="sixteen columns">
		<nav class="nav">
			<?php 
			$bt = BlockType::getByHandle('autonav');
			$bt->controller->displayPages = 'top';
			$bt->controller->orderBy = 'display_asc';                    
			$bt->controller->displaySubPages = 'none'; 
			$bt->controller->displaySubPageLevels = 'custom';
			$bt->controller->displaySubPageLevelsNum = '1';                   
			$bt->render('templates/main_menu');
			?><br class="clear" />
		</nav><!-- nav ends -->
	</div>
	<div class="sixteen columns header">
		<?php 
			$logo = new GlobalArea('Logo');
			if ($logo->getTotalBlocksInArea($c) == 0 && !$c->isEditMode()) {	
			?>
			<h1 class="logo">
        		<a href="<?php  echo DIR_REL?>/" title="<?php  echo SITE?>"><?php  
				$block = Block::getByName('My_Site_Name');  
				if( $block && $block->bID ) $block->display();   
				else echo SITE;
				?></a>
			</h1>
		<br class="clear" />
		<h3 class="slogan"><?php echo $pkg->config('avantslogan');?></h3>
		<?php } else { $logo->display($c); } ?>
    </div>