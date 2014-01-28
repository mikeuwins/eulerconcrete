<?php        
defined('C5_EXECUTE') or die(_("Access Denied."));
$db = Loader::db();
$fm = Loader::helper('form');  

 echo Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('Background Image'), false, false, false);?>
	<div class="ccm-pane-body ccm-ui">
	
		<form method="post" id="settings" action="<?php       echo $this->action('savebackground');?>">
		<h4><?php       echo t('Background Image')?></h4>
		<p><?php   echo t('Please note, this addon will scale an image to 2560px X 1920px (WxH) to reduce page loading time.'); ?></p>
		<?php    
					if ($bFID > 0) { 
						$bFIDo = File::getByID($bFID);
					}

					$al = Loader::helper('concrete/asset_library');

					?>
					
						<?php      echo $al->image('background-image', 'bFID', t('Choose Background Image'), $bFIDo); ?>
		
		<br/>
		
		<h4><?php       echo t('Element');?></h4>
		<p><?php    echo t('Or leave default to apply to') .'&lt;body&gt;'. t('tag (whole background). Include CSS selectors eg #element or .element'); ?></p>
		<?php       echo $fm->text('element',$element,array('size'=>'20'));?>
		<br/><br/><?php    echo t('Some notes:'); ?><ul><li><?php    echo t('It is suggested you use the CSS background-size: cover; property for best results.'); ?></li>
		<li><?php    echo t('Make sure no CSS code in your theme will override the code set by this addon.'); ?></li></ul>
		<br/><br/>
		<small><?php    echo t('coded by '); ?><a href="http://www.harveyappleton.co.uk">harveyappleton</a>.</small></p>
	</div>
		<div class="ccm-pane-footer">
	    	<?php       $ih = Loader::helper('concrete/interface'); ?>
	        <?php       print $ih->submit(t('Save'), 'settings', 'right', 'primary'); ?>
	        </form>
	    </div>
