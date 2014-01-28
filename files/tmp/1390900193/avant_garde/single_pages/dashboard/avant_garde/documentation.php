<?php          
defined('C5_EXECUTE') or die(_("Access Denied."));	
$h = Loader::helper('concrete/interface');
global $c; 
$interfaceHelper = Loader::helper('concrete/interface'); 
$dashboardHelper = Loader::helper('concrete/dashboard'); 
?>
<?php  if( method_exists( $dashboardHelper, 'getDashboardPaneHeaderWrapper') ){  
echo $dashboardHelper->getDashboardPaneHeaderWrapper(t('Documentation'),t("Documentation for Avant Garde theme.")); 
}else{ ?> 
<h1><span><?php echo t('Avant Garde Documentation')?></span></h1> 
<div class="ccm-pane-body">
	<?php  } ?>	
				<div class="row">
					<div class="span-pane-half">
						<h2><?php echo t('About');?></h2>
						<p><?php echo t('Avant Garde theme is a responsive HTML5 theme built on the ');?><a href="http://www.getskeleton.com" target="_blank"><?php echo t('Skeleton Framework.');?></a>
						<?php echo t('The framework uses only CSS techniques and rules to re-adjust your site according to the size of the screen that it is being displayed in.');?></p>
						<p><?php echo t('This theme is intended to be a basic framework theme that you can develop off of. The idea of this theme is to save you time, so you don\'t have to develop additional mobile-friendly versions of your site. It is designed to work with the following:');?></p>
						<?php echo t('<ul><li>Smartphones (ex. iPhone) - 320 x 480</li><li>Small Tablets (ex. e-readers) - 480 x 640</li><li>Large Tablets (ex. iPad) - 768 x 1024</li><li>Regular monitors (widescreen or standard) - sizes vary</li></ul>');?>
						<p><?php echo t('It works with either orientation - portrait or landscape - on the above devices.');?></p>
						<p><?php echo t('THEME VERSION: <strong>1.0</strong>');?></p>
						<p><?php echo t('MINIMUM Concrete5 VERSION: <strong>5.5.1</strong>');?></p>
						<h3><?php echo t('Features:');?></h3>
						<?php echo t('<ul><li><a href="http://www.fitvidsjs.com" target="new"><strong>FitVids.js</strong></a> - Automatically fits embedded videos to fit within any area</li>
							<li><strong>Avant Bio Block</strong> - Show a brief bio on a person and link to a page.</li>
							<li><strong>5 Page Types</strong></li>
							<li><strong>Back-end Configuration</strong> - Add a custom slogan.</li>
							<li><strong>Avant Featured Block</strong> - Display a heading, description, link to a page, with an auto-scaling background image.</li></ul>');?>
						<p><?php echo t('Also, you can easily customize the theme\'s color scheme by going to the Themes page in your dashboard.');?></p>
						<h2><?php echo t('Cool Tools');?></h2> 
						<p><?php echo t('There are several cool tools - all of which are FREE - that you can use to further develop and test your site with! All links open in a new window.');?></p>
						<p><a href="http://www.mattkersley.com/responsive/" target="_blank"><?php echo t('Responsive Design Testing');?></a></p>
						<p><a href="http://www.generateprivacypolicy.com/" target="_blank"><?php echo t('Privacy Policy Generator');?></a></p>
						<p><a href="http://www.loads.in" target="_blank"><?php echo t('Webpage Loading Speed Tester');?></a></p>
						<p><a href="http://ready.mobi/launch.jsp?locale=en_EN" target="_blank"><?php echo t('Mobile-Ready Evaluator');?></a></p>
						<p><a href="http://www.css3generator.com" target="_blank"><?php echo t('CSS3 Generator');?></a></p>
						<h2><?php echo t('Theme Resource Links');?></h2> 
						<p><a href="http://www.concrete5.org/marketplace/themes/avant-garde" target="_blank"><?php echo t('Concrete5 Marketplace Theme Homepage');?></a></p>
						<p><a href="http://c5.gclocal.net/themes/avant-garde" target="_blank"><?php echo t('Theme Demo');?></a></p>
					</div>
					<div class="span-pane-half">
						<h2><?php echo t('How To...');?></h2> 
						<?php echo t('<p>Below are sections on how to use various elements of this theme.</p>')?>
						<h4><?php echo t('Make Images Fit');?></h4>
						<p><?php echo t('Keeping your images at their regular size may not be suitable, as they may be too large for smaller devices. The best thing to do is to make them auto-fit, or scale, within a certain area.');?>
							<pre>style="width:100%; height: auto !important;"</pre>
						</p>
						<p><?php echo t('Or, you can use the following class...');?></p>
						<p><strong><em><?php echo t('.scale-with-grid');?></em></strong></p>
						<p><?php echo t('This class uses a similar style as shown above. Apply this class to anything that you would like to auto-fit within a certain area!');?></p>
						<h4><?php echo t('Customize General Styles');?></h4>
						<p><?php echo t('To change the way the theme appears, you will need to edit the file <strong>packages/flexcrete/themes/flexcrete/css/base.css</strong>.');?></p>
						<p><?php echo t('You will notice that this stylesheet is organized into convenient sections! Here, you can edit the following items:');?></p>
						<?php echo t('<ul><li>Body</li><li>Basic Typography</li><li>Header & Logo</li><li>Forms</li><li>Navigation</li><li>Buttons</li><li>Blocks</li><li>Other miscellaneous items</li></ul>');?>
						<h4><?php echo t('Utilize FitVids.js');?></h4>
						<p><?php echo t('FitVids.js is a jquery script that makes any YouTube (or other embedded) video auto-fit within that area. This means that it will re-adjust itself to 100% of the width of that area.');?></p>
						<p><?php echo t('The script is automatically called on ALL pages of your site. All you have to do is add the video! You do not need to worry about the width or height - the script will override that for you. It is recommended to use the iframe method of embedding.');?></p>
						<h4><?php echo t('Use the Avant Bio Block');?></h4>
						<p><?php echo t('This simple block allows you to display a name, occupation title, brief bio, and link to a page.');?></p>
						<p><?php echo t('Styling for this block is found in the <strong>base.css</strong> file, toward the bottom.');?></p>
						<h4><?php echo t('Use the Avant Featured Block');?></h4>
						<p><?php echo t('This block allows you to display a title, descrption, and link to a page. The background image (that you choose) auto-scales to fit within the area.');?></p>
						<p><?php echo t('You can add this block to any area you want. If you don\'t want a button link, simply leave the field blank. Styling is found in the <strong>base.css</strong> file.');?></p>
					</div><!-- END HALF SPAN -->
				</div><!-- END ROW -->
</div>
<?php  if( method_exists( $dashboardHelper, 'getDashboardPaneFooterWrapper') ){ 
	echo $dashboardHelper->getDashboardPaneFooterWrapper(); 
}else{ ?>  
	</div> 
<?php  } ?> 
