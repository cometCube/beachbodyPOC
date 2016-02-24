<?php

use Website\Controller\Action;

class HomeController extends Action {
	
	public function indexAction () {
		$this->enableLayout();

		$entries = new Object_Trainer_List();
		$entries->load();
		$this->view->trainers = $entries->objects;
	}
}
