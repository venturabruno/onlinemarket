<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{
	private $categories;
	
	public function indexAction() {
		return new ViewModel(array('categories' => $this->categories));
	}
	
	public function setCategories(array $categories) {
		$this->categories = $categories;
	}
		
}