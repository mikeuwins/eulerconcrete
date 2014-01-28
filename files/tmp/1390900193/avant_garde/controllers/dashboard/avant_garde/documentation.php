<?php          
defined('C5_EXECUTE') or die(_("Access Denied."));
class DashboardAvantGardeDocumentationController extends Controller {
	public $helpers = array("form");
	
	
	public function on_start() {
		$subnav = array(
			array(View::url('/dashboard/avant_garde/'),t('Avant Garde')), 
			array(View::url('/dashboard/avant_garde/settings/'),t('Configure'), true),
			array(View::url('/dashboard/avant_garde/documentation/'),t('Documentation'), true),
		);
		$this->set('subnav', $subnav);
		$this->error = Loader::helper('validation/error');
	}
}
?>