<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ViewController extends AbstractActionController {
	
	public function indexAction(){
		return new ViewModel(array('category' => $this->params()->fromRoute('category')));
	}
	
	public function itemAction(){
		$itemId = $this->params()->fromRoute('itemId');
		
		if(empty($itemId)){
			$this->flashMessenger()->addMessage('Item not found');
			return $this->redirect()->toRoute();
		}
		
		return new ViewModel(array('category' => $itemId));
	}
}