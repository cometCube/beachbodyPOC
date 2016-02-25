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

	public function trainerProgramsAction () {
		$this->enableLayout();
		$trainers = new Object_Trainer_List();
		$trainers->setCondition("o_key = ?", $this->_getParam('key'));
		$trainers->load();
		
		$programsList = new Object_Program_List();
    	$programsList->setCondition("trainerID = ?", ",".$trainers->objects[0]->o_id.",");	
		$programsList->load();
		$this->view->programs = $programsList->objects;
	}

	public function programDetailsAction() {
		$this->enableLayout();
		/*$program = new Object_Program_List();
		$program->setCondition("o_key = ?", $this->_getParam('key'));
		$program->load();

		$programDetails['program_details'] = $program->objects[0];

		$workoutGroupList = new Object_Workoutgroup_List();
		$workoutGroupList->setCondition("programID = ?", ",".$program->objects[0]->o_id.",");
		$workoutGroupList->load();

		$workoutGroups = $workoutGroupList->objects;
		foreach ($workoutGroups as $key => $value) {
			echo "<pre>";
			echo "this is key";
			print_r($key);
			print_r($value);
		}
		die;*/
	}
    
    public function footerAction() {
        
    }
}
