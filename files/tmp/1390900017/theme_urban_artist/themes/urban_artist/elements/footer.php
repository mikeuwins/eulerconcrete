<?php    	   defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
	<div id="footer">
<?php      $a = new Area('Footer');
$a->display($c); ?>
<br>
	
		<div id="footer-left">
			<p>
			Theme made by <a href="http://www.12345j.co.cc">12345j</a>.
This site is powered by <a href="http://www.concrete5.org/r/-/27444">Concrete5.</a> </p>  
			&copy; <?php    	 echo date('Y')?> <a href="<?php         echo DIR_REL?>/"><?php    	echo SITE?></a>.
			     
			<?php    	  echo t('All rights reserved.')?>
			
			<?php    	  
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php    	   
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
			<?php    	  echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php         echo $this->url('/login', 'logout')?>"><?php         echo t('Sign Out')?></a>
			
					<?php    	   } else { ?>
<a href="<?php    	   echo $this->url('/login')?>"><?php    	  echo t('Sign In to Edit this Site')?></a> 
			<?php    	   } ?>&nbsp;
			<br>
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a> &nbsp;
			
			Valid: <a href="http://validator.w3.org/check/referer">XHTML</a> | 
			<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>		
			</p>	
		</div>
		
		<div id="footer-right">
			<p class="align-right">
			<a href="index.html">Home</a> | <a href="index.html">Sitemap</a> | <a href="index.html" class="rssfeed">RSS Feed</a> 
			</p>
		</div>
		
	</div>
	<!-- footer ends here -->
	
<!-- wrap ends here -->
</div>
<?php    	   Loader::element('footer_required'); ?>
</body>
</html>

