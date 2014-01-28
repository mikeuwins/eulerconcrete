<?php          
defined('C5_EXECUTE') or die(_("Access Denied."));
/* 
	Theme Name: Avant Garde
	Description: Responsive theme built on Skeleton framework.
	Author: Growth Curve
	Author URI: http://www.growthcurve.co 
	Version: 1.x
*/
class DashboardAvantGardeSettingsController extends Controller {
	public $helpers = array("form");
	
	
	public function on_start() {
		$subnav = array(
			array(View::url('/dashboard/avant_garde/'),t('Avant Garde'), true), 
			array(View::url('/dashboard/avant_garde/settings/'),t('Configure')),
			array(View::url('/dashboard/avant_garde/documentation/'),t('Documentation')),
		);
		$this->set('subnav', $subnav);
		Loader::model('page_list');
		$this->error = Loader::helper('validation/error');
	}
	public function view(){
		$pkg = Package::getByHandle('avant_garde');
		$this->set('avantslogan', $pkg->config('avantslogan'));
	}

	public function avantslogan() {
		$pkg = Package::getByHandle('avant_garde');
    	$pkg->saveConfig('avantslogan', $this->post('avantslogan'));
        $this->set('message',t('Slogan has been saved.'));   
        $this->view();
	}
	public function feedback() {
		$mh = Loader::helper('mail');
		$name=$this->post('name');
		$email=$this->post('email');
		$type=$this->post('feedback-type');
		$feedback=$this->post('feedback');
		$mh->setSubject('Feedback - '.$type);
		$mh->to('beefchunksinc@yahoo.com', 'Growth Curve');
		$mh->addParameter('name', $name);
		$mh->addParameter('email', $email);
		$mh->addParameter('type', $type);
		$mh->addParameter('feedback', $feedback);
		$mh->load('single_page_feedback', 'avant_garde');
		$mh->from($email);
		$mh->sendMail();
        $this->set('message',t('Feedback has been sent.'));   
        $this->view();
	}
}
?>