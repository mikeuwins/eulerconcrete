<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$formPageSelector = Loader::helper('form/page_selector'); ?>
<?php    

defined('C5_EXECUTE') or die(_("Access Denied."));
$includeAssetLibrary = true;
$assetLibraryPassThru = array(
	'type' => 'image'
);
$al = Loader::helper('concrete/asset_library');
$bf = null;
	if ($controller->getFileID() > 0) { 
		$bf = $controller->getFileObject();
	}

?>

<div style="margin: 20px 0;">
<?php  echo $form->label('avantTitle', 'Title:');?>
<?php  echo $form->text('avantTitle', $avantTitle, array('style' => 'width: 320px'));?>
</div>

<div style="margin: 20px 0;">
<?php  echo $form->label('avantDesc', 'Description:');?>
<?php  echo $form->text('avantDesc', $avantDesc, array('style' => 'width: 320px'));?>
</div>

<div style="margin: 20px 0;">
<?php  echo("<label>Select a page to link to:</label>");
echo $formPageSelector->selectPage('pageID',$pageID); ?>
</div>

<div style="margin: 20px 0;">
<?php  echo $form->label('avantLinkText', 'Link Text (Leave blank if you do not wish to display a button.):');?>
<?php  echo $form->text('avantLinkText', $avantLinkText, array('style' => 'width: 320px'));?>
</div>

<div style="margin: 20px 0;">
<?php  echo("<br><label>Choose an Image:</label>");
echo $al->image('ccm-b-image', 'fID', t('Choose Image'), $bf);?>
</div>
