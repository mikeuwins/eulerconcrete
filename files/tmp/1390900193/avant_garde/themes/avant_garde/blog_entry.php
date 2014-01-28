<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
$pkg = Package::getByHandle('avant_garde'); ?>
<?php   $this->inc('elements/header.php'); ?>

	<div id="body" class="two-thirds column main">
		<div class="pageSection">
			<h1><?php  echo $c->getCollectionName(); ?></h1>
			<p class="meta"><?php  echo t('Posted by')?> <?php  echo $c->getVersionObject()->getVersionAuthorUserName(); ?> on <?php  echo $c->getCollectionDatePublic('F j, Y'); ?></p>		
		</div>
		<div class="pageSection">
		<?php  $a = new Area('Main'); $a->display($c); ?>
		</div>
		<div class="pageSection">
		<?php  $a = new Area('Blog Post More'); $a->display($c); ?>
		</div>
	</div>
	<div class="one-third column sidebar">
		<?php  $a = new Area('Sidebar'); $a->display($c); ?>
	</div>
	
	<div class="sixteen columns full">
		<?php  $a = new Area('Additional Content'); $a->display($c); ?>
	</div>
	
<?php   $this->inc('elements/footer.php'); ?>