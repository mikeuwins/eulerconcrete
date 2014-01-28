<?php   

defined('C5_EXECUTE') or die(_("Access Denied."));

class AvantGardePackage extends Package {

	protected $pkgHandle = 'avant_garde';
	protected $appVersionRequired = '5.5.1';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Installs Avant Garde theme.");
	}
	
	public function getPackageName() {
		return t("Avant Garde");
	}
	
	public function install() {
		$pkg = parent::install();
		// load stuff we need
		Loader::model('single_page');
		Loader::model('collection_types');
		Loader::model('collection_attributes');
		Loader::model('package');
		// install theme		
		PageTheme::add('avant_garde', $pkg);	
		// install blocks
		BlockType::installBlockTypeFromPackage('avant_featured', $pkg);
		BlockType::installBlockTypeFromPackage('avant_bio', $pkg);
		
		// install page types
		$ct = CollectionType::getByHandle('home');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'home';
			$data['ctName'] = t('Home');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('left_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'left_sidebar';
			$data['ctName'] = t('Left Sidebar');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('right_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'right_sidebar';
			$data['ctName'] = t('Right Sidebar');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('full');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'full';
			$data['ctName'] = t('Full');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('blog_entry');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'blog_entry';
			$data['ctName'] = t('Blog Entry');
			$hpt = CollectionType::add($data, $pkg);
		}

		//install dashboard pages
		Loader::model('single_page');
		$fcPage=Page::getByPath('/dashboard/avant_garde'); 
		if( !intval($fcPage->cID) ){ 
			$fcPage=SinglePage::add('/dashboard/avant_garde', $pkg); }
		$fcPage->update(array('cName'=>t('Avant Garde'), 'cDescription'=>t('Configure avant_garde theme.'))); 
		//main and configuration single page
		$fcConfigPage=Page::getByPath('/dashboard/avant_garde/settings');
		if( !intval($fcConfigPage->cID) ){ 
			$fcConfigPage=SinglePage::add('/dashboard/avant_garde/settings', $pkg); }
		$fcConfigPage->update(array('cName'=>t('Configure'), 'cDescription'=>t('Configure the avant_garde theme.')));		
		//documentation single page
		$fcDocsPage=Page::getByPath('/dashboard/avant_garde/documentation');
		if( !intval($fcDocsPage->cID) ){ 
			$fcDocsPage=SinglePage::add('/dashboard/avant_garde/documentation', $pkg); }
		$fcDocsPage->update(array('cName'=>t('Documenation'), 'cDescription'=>t('Documentation for avant_garde theme.')));	
		
	}
	public function uninstall(){
		parent::uninstall();
	}

}