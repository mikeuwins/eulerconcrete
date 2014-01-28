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

<h2><?php echo t('Front Side');?></h2>
<div class="ccm-block-field-group">
<?php  echo $form->label('abfName', 'Name:');?>
<?php  echo $form->text('abfName', $abfName, array('style' => 'width: 320px'));?>
</div>
<div class="ccm-block-field-group">
<?php  echo $form->label('abfTitle', 'Job Title:');?>
<?php  echo $form->text('abfTitle', $abfTitle, array('style' => 'width: 320px'));?>
</div>
<div class="ccm-block-field-group">
<?php  echo("<br><label>Choose an Image:</label>");
echo $al->image('ccm-b-image', 'fID', t('Choose Image'), $bf);?><br />
</div>
<div class="ccm-block-field-group">
<?php  echo $form->label('abfBio', 'Biography:');?>
<?php  echo $form->text('abfBio', $abfBio, array('style' => 'width: 320px'));?>
</div>
<div class="ccm-block-field-group">
<?php  echo("<label>Select a page to link to:</label>"); echo $formPageSelector->selectPage('pageID',$pageID); ?>
</div>
<div class="ccm-block-field-group">
<?php  echo $form->label('abfLinkText', 'Link Text:');?>
<?php  echo $form->text('abfLinkText', $abfLinkText, array('style' => 'width: 320px'));?>
</div>