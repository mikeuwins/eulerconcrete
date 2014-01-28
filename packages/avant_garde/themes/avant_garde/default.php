<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
$pkg = Package::getByHandle('avant_garde'); ?>
<?php   $this->inc('elements/header.php'); ?> 

	<div class="sixteen columns">
		<?php  $a = new Area('Featured'); $a->display($c); ?>
	</div>	
	<div class="two-thirds column">
			<?php  $a = new Area('Main'); $a->display($c); ?>
	</div>
	<div class="one-third column">
			<?php  $a = new Area('Sidebar'); $a->display($c); ?>
	</div>
	<div class="sixteen columns">
		<?php  $a = new Area('Additional Content'); $a->display($c); ?>
	</div>	

<?php   $this->inc('elements/footer.php'); ?>