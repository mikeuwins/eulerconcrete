<?php 

defined('C5_EXECUTE') or die(_("Access Denied.")); 

class DashboardAvantGardeController extends Controller { 
	
	public function view(){ 
	
		$this->redirect('/dashboard/avant_garde/settings');
		
	}	
	
}

?>