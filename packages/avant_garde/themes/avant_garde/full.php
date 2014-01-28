<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
$pkg = Package::getByHandle('avant_garde'); ?>
<?php   $this->inc('elements/header.php'); ?>
	<div class="sixteen columns">
		<?php  $a = new Area('Main'); $a->display($c); ?>
	</div>	
<?php   $this->inc('elements/footer.php'); ?>