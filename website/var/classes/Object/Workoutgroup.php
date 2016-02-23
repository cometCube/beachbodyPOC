<?php 

/** Generated at 2016-02-23T13:44:40+01:00 */

/**
* Workout Groups for Programs
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Workoutgroup getByProgramID ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workoutgroup getByWgname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workoutgroup getByWgactive ($value, $limit = 0) 
*/

class Workoutgroup extends Concrete {

public $o_classId = 3;
public $o_className = "workoutgroup";
public $programID;
public $wgname;
public $wgactive;


/**
* @param array $values
* @return \Pimcore\Model\Object\Workoutgroup
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get programID - Program ID for Workout Group
* @return array
*/
public function getProgramID () {
	$preValue = $this->preGetValue("programID"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("programID")->preGetData($this);
	return $data;
}

/**
* Set programID - Program ID for Workout Group
* @param array $programID
* @return \Pimcore\Model\Object\Workoutgroup
*/
public function setProgramID ($programID) {
	$this->programID = $this->getClass()->getFieldDefinition("programID")->preSetData($this, $programID);
	return $this;
}

/**
* Get wgname - Workout Group Name
* @return string
*/
public function getWgname () {
	$preValue = $this->preGetValue("wgname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wgname;
	return $data;
}

/**
* Set wgname - Workout Group Name
* @param string $wgname
* @return \Pimcore\Model\Object\Workoutgroup
*/
public function setWgname ($wgname) {
	$this->wgname = $wgname;
	return $this;
}

/**
* Get wgactive - Workout Group Active
* @return boolean
*/
public function getWgactive () {
	$preValue = $this->preGetValue("wgactive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wgactive;
	return $data;
}

/**
* Set wgactive - Workout Group Active
* @param boolean $wgactive
* @return \Pimcore\Model\Object\Workoutgroup
*/
public function setWgactive ($wgactive) {
	$this->wgactive = $wgactive;
	return $this;
}

protected static $_relationFields = array (
  'programID' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = NULL;

}

