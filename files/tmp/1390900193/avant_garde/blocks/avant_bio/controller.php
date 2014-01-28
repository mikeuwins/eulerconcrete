<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	class AvantBioBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Add a Featured Image Content Block";
		protected $btName = "Avant Bio";
		protected $btTable = 'btAvantBio';
		protected $btInterfaceWidth = "370";
		protected $btInterfaceHeight = "350";
		
		public function on_page_view(){
         $html = Loader::helper('html');
         
         $v = View::GetInstance();
         
         $b = $this->getBlockObject();         
         $btID = $b->getBlockTypeID();
         $bt = BlockType::getByID($btID);        
         
         $uh = Loader::helper('concrete/urls');
		}
      	
		function getFileID() {return $this->fID;}
		
		function getFileObject() {
    		    return File::getByID($this->fID);
		}
		
		function getAssetFileObject() {
		    return LibraryFileBlockController::getFile($this->fID);
		}		
		
		public function save($args) {
			$args['fID'] = ($args['fID'] != '') ? $args['fID'] : 0;
			$args['displayCaption'] = ($args['displayCaption'] != '') ? $args['displayCaption'] : 0;
			parent::save($args);
		}
		
	}
	
?>