<?php          
defined('C5_EXECUTE') or die(_("Access Denied."));

class BackgroundImagePackage extends Package {

     protected $pkgHandle = 'background_image';
     protected $appVersionRequired = '5.6';
     protected $pkgVersion = '1.0';

     public function getPackageDescription() {
          return t("Set global site background.");
     }

     public function getPackageName() {
          return t("Background Image");
     }
     
    public function on_start() {
     define('ENABLE_APPLICATION_EVENTS', TRUE);
       Events::extend('on_page_view', 'BackgroundImage', 'addHeaderItems', 'packages/'.$this->pkgHandle.'/models/background_image.php');
    }

     public function install() {
          $pkg = parent::install();
      $iak = CollectionAttributeKey::getByHandle('icon_dashboard');

	  Loader::model('single_page');
	  $sp = SinglePage::add("/dashboard/pages/background", $pkg);
	  $sp->update(array('cName'=>t('Background Image'), 'cDescription'=>t('Set global site background.')));
       $sp->setAttribute($iak,'icon-picture');

         }

	public function uninstall() {
		$db = Loader::db();
		$db->Execute("drop table if exists background_image");
		parent::uninstall();
	} 
     
}
?>
