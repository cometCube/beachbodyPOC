<?php

use Website\Controller\Action;

class HomeController extends Action {

	public function headerAction() {
        
    }

    public function programListAction($type) {

    	$programsList = new Object_Program_List();
    	if($type == 0) {
    		$programsList->setCondition("ispremium IS NULL OR ispremium = 0");	
    	} elseif($type == 1) {
    		$programsList->setCondition("ispremium = 1");
    	}
		$programsList->load();
		return $programsList->objects;
    }

    public function trainersListAction() {
    	$trainers = new Object_Trainer_List();
		$trainers->load();
		return $trainers->objects;
    }
	
	public function indexAction () {
		$this->enableLayout();

		/*Get Normal Programs List*/
		$this->view->normalPrograms = $this->programListAction(0);

		/*Get Premium Programs List*/
		$this->view->premiumPrograms = $this->programListAction(1);

		/*Get Trainers List*/
		$this->view->trainers = $this->trainersListAction();
	}

	public function programsAction () {
		$this->enableLayout();
		$programType = $this->_getParam('type');

		$this->view->programs = $this->programListAction($programType);
		
	}

	public function trainersAction () {
		$this->enableLayout();
		$this->view->trainers = $this->trainersListAction();
	}

	public function trainerAction () {
		$this->enableLayout();
	}
    
    public function footerAction() {
        
    }
}
