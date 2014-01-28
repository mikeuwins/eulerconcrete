<?php        

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeUrbanArtistPackage extends Package {

	protected $pkgHandle = 'theme_urban_artist';
	protected $appVersionRequired = '5.3';
	protected $pkgVersion = '1.0.2';
	
	public function getPackageDescription() {
		return t("Installs Urban Artist theme");
	}
	
	public function getPackageName() {
		return t("Urban Artist");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		PageTheme::add('urban_artist', $pkg);		
	}




}