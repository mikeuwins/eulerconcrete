<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class ComposerEditButtonPackage extends Package {

	protected $pkgHandle = 'composer_edit_button';
	protected $appVersionRequired = '5.5.1';
	protected $pkgVersion = '0.9.1';
	
	public function getPackageDescription() {
		return t("A toolbar button to quickly edit pages via the composer");
	}
	
	public function getPackageName() {
		return t("Edit In Composer Toolbar Button");
	}
	
	public function on_start() {
	  if(version_compare(APP_VERSION,'5.4.1.1', '>')){
	     $ihm = Loader::helper('concrete/interface/menu');
	     $uh = Loader::helper('concrete/urls');
	     $req = Request::get(); 
	     
	     $id = $req->getRequestCollectionID();
	  
	     $ihm->addPageHeaderMenuItem('composer', t('Edit In Composer'), 'left', array('class'=>'ccm-menu-icon ccm-icon-edit', 'href' => DIR_REL . '/index.php/dashboard/composer/write/-/edit/' .  $id), 'composer_edit_button');         
	 	}   
	}
   
}