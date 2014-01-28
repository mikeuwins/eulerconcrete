<?php         
defined('C5_EXECUTE') or die(_("Access Denied.")); 
class DashboardPagesBackgroundController extends Controller {
	

	public $helpers = array('html','form');
	
	public function on_start() {
	
	}
	
	public function view() {
			$db = Loader::db();

		$html = Loader::helper('html');
		$v = View::getInstance();
		$r = $db->execute("SELECT * FROM background_image");
		while($row = $r->fetchrow()){
			$this->set('bFID', $row['bFID']);
			$this->set('element', $row['element']);
		}
	}

	public function savebackground() {
			$db = Loader::db();

				$qc = ("TRUNCATE TABLE background_image");
				$db->Execute($qc);
				
				
				$args = array(
					'bFID' => $this->post('bFID'),
					'element'=> $this->post('element')
				);
				$qi = ("INSERT INTO background_image (bFID, element) VALUES (?,?)");
				$db->Execute($qi,$args);
				
$this->set('message', t('Background updated.'));
		$this->view();	
		}
	
	
	
}