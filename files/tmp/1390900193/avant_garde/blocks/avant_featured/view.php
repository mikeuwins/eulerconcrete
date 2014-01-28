<?php 	defined('C5_EXECUTE') or die(_("Access Denied."));
$theLink = Page::getCollectionPathFromID($pageID);
$theLink = DIR_REL . $theLink;
$version_arr = explode('.', APP_VERSION);
if ($version_arr[1] < 2) die("This block doesn't support Concrete" . APP_VERSION);
if ($version_arr[1] == 2) {
	$fo        = $controller->getAssetFileObject();
	$fileName  = $fo->getFileRelativePath();
}
else {
	$ih = Loader::helper('image');
	$fo = $controller->getFileObject();
	$fileName = $fo->getRelativePath();
}
?> 
<div class="<?php  echo $bID?>avf avantf">    
	<div>
        <h2><?php  echo $avantTitle?></h2>
        <p><?php  echo $avantDesc?></p>
		<?php if(isset($avantLinkText)&&$avantLinkText!=""){?>
		<a href="/index.php<?php  echo $theLink ?>">
			<button><?php  echo $avantLinkText?></button>
		</a><?php } ?>
	</div>
</div>
<script>
	$('.<?php  echo $bID?>avf').anystretch("<?php echo $fileName;?>");
</script>