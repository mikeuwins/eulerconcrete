<?php          
defined('C5_EXECUTE') or die(_("Access Denied."));	
$h = Loader::helper('concrete/interface');
global $c; 
$interfaceHelper = Loader::helper('concrete/interface'); 
$dashboardHelper = Loader::helper('concrete/dashboard'); 
?>
<?php  if( method_exists( $dashboardHelper, 'getDashboardPaneHeaderWrapper') ){  
echo $dashboardHelper->getDashboardPaneHeaderWrapper(t('Configure Avant Garde'),t("Configure the Avant Garde theme.")); 
}else{ ?> 
<h1><span><?php echo t('Avant Garde')?></span></h1> 
<div class="ccm-pane-body">
	<?php  } ?>	
				<div class="row">
					<div class="span-pane-half">
						<div class="ccm-dashboard-inner">
							<div class="ccm-module-wrapper">
								<h2><?php echo t('Theme Settings');?></h2>
								<div class="ccm-module">
									<?php echo t('<h4>Slogan:</h4>')?>
									<?php echo t('<p>The slogan will display beneath the logo.</p>')?>
									<form method="post" action="<?php echo $this->action('avantslogan')?>" id="ccm-single-pages-theme-avantslogan">
										<input type="text" name="avantslogan" value="<?php echo $avantslogan;?>"/> 			
										<div class="ccm-buttons">
											<a href="javascript:void(0)" onclick="$('#ccm-single-pages-theme-avantslogan').get(0).submit()" style="float:left;" class="btn"><span><?php echo t('Save Slogan')?></span></a>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="span-pane-half">
						<?php echo t('<h3>Feedback</h3>')?>
						<?php echo t('<p>Send the developer a message! Please allow 24 to 48 hours for a response.</p>')?>
						<div class="ccm-module">
									<form method="post" action="<?php echo $this->action('feedback')?>" id="ccm-remarkable-feedback-form">
										<label for="feedback-type"><?php echo t('Feedback Type:<br/>');?></label> 
										<select name="feedback-type" id="feedback-type"> 
											<option value="choose"><?php echo t('--Choose One--');?></option> 
											<option value="bug"><?php echo t('Bug Report');?></option> 
											<option value="support"><?php echo t('Support');?></option> 
											<option value="feature"><?php echo t('Feature Request');?></option> 
											<option value="hireus"><?php echo t('Hire Us For Custom Work');?></option>
											<option value="encouragement"><?php echo t('You\'re Amazing!');?></option>
										</select> 
										<div><p id="support"><?php echo t('For support it is faster and easier for us to fix your problem if you go to <a href="http://http://www.concrete5.org/marketplace/themes/single-page-theme/support">here</a> and post.');?></p></div>
										<div id="hide">	<label for="name"><?php echo t('Name:<br/>');?></label> 
											<input type="text" id="name" name="name"/> 
											<br/>
											<label for="email"><?php echo t('Email Address:<br/>');?></label> 
											<input type="email" id="email" name="email"/> 
											<br/>
											<label for="feedback"><?php echo t('Feedback:<br/>');?></label> 
											<textarea id="feedback" name="feedback" style="width: 400px; height:75px;"></textarea>
											<div class="ccm-buttons">
												<a href="javascript:void(0)" onclick="$('#ccm-remarkable-feedback-form').get(0).submit()" class="btn" style="float:left;margin-top:15px"><span><?php echo t('Send Feedback')?></span></a>
											</div>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
									<div class="ccm-spacer">&nbsp;</div>
									<?php echo t('<h3>Contact Us</h3>')?>
									<?php echo t('<p>You can get a hold of us at the following places:</p>')?>
									<a href="http://www.concrete5.org/profile/-/view/11911/" target="_blank"><span><?php echo t('Concrete5 Profile')?></span></a>
						</div>
					</div><!-- END HALF SPAN -->
				</div><!-- END ROW -->
</div>

<?php  if( method_exists( $dashboardHelper, 'getDashboardPaneFooterWrapper') ){ 
	echo $dashboardHelper->getDashboardPaneFooterWrapper(); 
}else{ ?>  
	</div> 
<?php  } ?> 
<script type="text/javascript">
$('#feedback-type').change(function() {
  $("#support")[$(this).val() == "support" ? 'show' : 'hide']("fast");
  $("#hide")[$(this).val() !== "support" ? 'show' : 'hide']("fast");
}).change();
</script>

