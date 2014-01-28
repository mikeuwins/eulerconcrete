<?php         defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
<?php         
    Loader::element('header_required'); 
 ?>
<link rel="stylesheet" media="screen" type="text/css" href="<?php     echo $this->getStyleSheet('main.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php     echo $this->getStyleSheet('typography.css')?>" />
</head>
<body>

<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
					<h1 id="logo-text"><a href="<?php        echo DIR_REL?>/"><?php       
				$block = Block::getByName('My_Site_Name');
				if($block && $block->bID) $block->display();
				else echo SITE;?></a>
			</h1>	

		
		<div  id="nav">
<?php  
    $a = new Area('Header Nav');
    $a->display($c);
?>	
		</div>	
						
	<!--header ends-->					
	</div>

 

