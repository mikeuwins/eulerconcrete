<?php          
defined('C5_EXECUTE') or die(_("Access Denied."));

class BackgroundImage extends Object {
 
   public function addHeaderItems(){
       $html = Loader::helper('html');
       $pkgHandle = 'background_image';
       $pkg = Package::getByHandle($pkgHandle);
       $page = Page::getCurrentPage();
       $systemPage = $page->isAdminArea();
       //$active = $pkg->config('ACTIVE');
       if($systemPage != true){
          $v = View::getInstance();
         // $v->addHeaderItem('<script type="text/javascript" src="src"></script>');
         	$ih = Loader::helper('image'); 
		$db = Loader::db();
	$r = $db->execute("SELECT * FROM background_image");
	$bFID; $element;
		while($row = $r->fetchrow()){
			$bFID=$row['bFID'];
			$element=$row['element'];
		}

		if(!empty($bFID)) {
	$f = File::getByID($bFID);
	$bg_img_src = $ih->getThumbnail($f->getPath(), 2560, 1920)->src;//$f->getVersion()->getRelativePath();
	$print_element = 'body'; if (!empty($element))  { $print_element= $element; } 

	
	$v->addHeaderItem('	<style type="text/css">'.$print_element.' { background-image: url(\''.$bg_img_src.'\'); }</style><!-- addon -->');


	 } 
          //$v->addHeaderItem($html->css('background_image.php', $pkgHandle));
       }
 
   }
}
 