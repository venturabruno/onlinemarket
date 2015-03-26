<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Controller\PostController;

class PostControllerFactory implements FactoryInterface {
	
	public function createService(ServiceLocatorInterface $controllerManager) {
		$categories = $controllerManager->getServiceLocator()->get('categories');
		$postController = new PostController();
		$postController->setCategories($categories);
		return $postController;	
	}
}