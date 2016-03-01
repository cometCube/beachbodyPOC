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

		if($this->editmode) {
			$defaultTrainer = $this->trainersListAction();
			$defaultTrainerKey = $defaultTrainer[0]->o_key;
		} else {
			$defaultTrainerKey = $this->_getParam('key');
		}
		
		$trainers = new Object_Trainer_List();
		$trainers->setCondition("o_key = ?", $defaultTrainerKey);
		$trainers->load();
		
		$programsList = new Object_Program_List();
    	$programsList->setCondition("trainerID = ?", ",".$trainers->objects[0]->o_id.",");	
		$programsList->load();
		$this->view->programs = $programsList->objects;
	}

	public function programDetailsAction() {
		$this->enableLayout();
		if($this->editmode) {
			$defaultProgram = $this->programListAction(0);
			$defaultProgramKey = $defaultProgram[0]->o_key;
		} else {
			$defaultProgramKey = $this->_getParam('key');
		}
		$program = new Object_Program_List();
		$program->setCondition("o_key = ?", $defaultProgramKey);
		$program->load();

		$details = $program->objects[0];

		$progrmDetails['program_details']['time'] = $details->getFtimelabel();
		$progrmDetails['program_details']['type'] = $details->getPtype();
		$progrmDetails['program_details']['expert'] = $details->getFexpertlevel();
		$progrmDetails['program_details']['desc'] = $details->getPdesc();
		$progrmDetails['program_details']['ispremium'] = $details->getIspremium();

		$workoutGroupList = new Object_Workoutgroup_List();
		$workoutGroupList->setCondition("programID = ?", ",".$details->o_id.",");
		$workoutGroupList->load();

		$workoutGroups = $workoutGroupList->objects;
		foreach ($workoutGroups as $key => $value) {
			$progrmDetails['workout-groups'][$key]['wg_id'] = $value->o_id;
			$progrmDetails['workout-groups'][$key]['wg_name'] = $value->getWgname();

			$workoutList = new Object_Workout_List();
			$workoutList->setCondition("workoutgroupID = ?", ",".$value->o_id.",");
			$workoutList->load();

			$workouts = $workoutList->objects;
			foreach ($workouts as $k => $val) {
				$progrmDetails['workout-groups'][$key]['workout'][$k]['name'] = $val->getWname();
				$progrmDetails['workout-groups'][$key]['workout'][$k]['desc'] = $val->getWdesc();
				$progrmDetails['workout-groups'][$key]['workout'][$k]['req_eqp'] = $val->getReqequipment();
				$progrmDetails['workout-groups'][$key]['workout'][$k]['rec_eqp'] = $val->getRecequipment();
				$progrmDetails['workout-groups'][$key]['workout'][$k]['time'] = $val->getWtime();
				$progrmDetails['workout-groups'][$key]['workout'][$k]['active'] = $val->getWactive();
			}
		}
		
		$this->view->programDetails = $progrmDetails;
	}
    
    public function footerAction() {
        
    }

    public function teaserAction() {
        
    }
}
