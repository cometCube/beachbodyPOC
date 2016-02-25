<?php

use Website\Controller\Action;

class HomeController extends Action {
	
	public function indexAction () {
		$this->enableLayout();

		/*Get Normal Programs List*/
		$normalPrograms = new Object_Program_List();
		$normalPrograms->setCondition("ispremium IS NULL OR ispremium = 0");
		$normalPrograms->load();
		$this->view->normalPrograms = $normalPrograms->objects;

		/*Get Premium Programs List*/
		$premiumPrograms = new Object_Program_List();
		$premiumPrograms->setCondition("ispremium = 1");
		$premiumPrograms->load();
		$this->view->premiumPrograms = $premiumPrograms->objects;

		/*Get Trainers List*/
		$trainers = new Object_Trainer_List();
		$trainers->load();
		$this->view->trainers = $trainers->objects;
	}

	public function trainersAction () {
		$this->enableLayout();
	}
        
    public function headerAction() {
        
    }
    
    public function footerAction() {
        
    }
}
