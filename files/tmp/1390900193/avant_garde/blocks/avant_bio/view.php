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

<div class="<?php  echo $bID?>abf" id="abf-wrap">
	<div class="abf-view">
		<img src="<?php echo $fileName;?>" />
		<h3><?php  echo $abfName?></h3>
		<h4><?php  echo $abfTitle?></h4>
		<p><?php  echo $abfBio?></p>
		<p><a href="/index.php<?php  echo $theLink ?>"><?php  echo $abfLinkText?></a></p>
		<div class="abfclear"></div>
	</div>
</div>