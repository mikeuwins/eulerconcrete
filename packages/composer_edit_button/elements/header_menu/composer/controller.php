<?php 
defined('C5_EXECUTE') or die("Access Denied.");
class ComposerConcreteInterfaceMenuItemController extends ConcreteInterfaceMenuItemController {
   public function displayItem() {
      $page = Page::getCurrentPage();
	  $pageType = CollectionType::getByHandle($page->getCollectionTypeHandle());
      return (!$page->isEditMode() &&  $pageType && $pageType->isCollectionTypeIncludedInComposer() && !$page->isMasterCollection());
   }
}
?>