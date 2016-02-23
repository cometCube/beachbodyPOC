<?php 

/** Generated at 2016-02-23T14:41:58+01:00 */

/**
* Class for Workout.
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Workout getByWorkoutgroupID ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByWname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByWdesc ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByReqequipment ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByRecequipment ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByWtime ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByWvideo ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Workout getByWactive ($value, $limit = 0) 
*/

class Workout extends Concrete {

public $o_classId = 4;
public $o_className = "workout";
public $workoutgroupID;
public $wname;
public $wdesc;
public $reqequipment;
public $recequipment;
public $wtime;
public $wvideo;
public $wactive;


/**
* @param array $values
* @return \Pimcore\Model\Object\Workout
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get workoutgroupID - Workout Group ID
* @return array
*/
public function getWorkoutgroupID () {
	$preValue = $this->preGetValue("workoutgroupID"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("workoutgroupID")->preGetData($this);
	return $data;
}

/**
* Set workoutgroupID - Workout Group ID
* @param array $workoutgroupID
* @return \Pimcore\Model\Object\Workout
*/
public function setWorkoutgroupID ($workoutgroupID) {
	$this->workoutgroupID = $this->getClass()->getFieldDefinition("workoutgroupID")->preSetData($this, $workoutgroupID);
	return $this;
}

/**
* Get wname - Workout Name
* @return string
*/
public function getWname () {
	$preValue = $this->preGetValue("wname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wname;
	return $data;
}

/**
* Set wname - Workout Name
* @param string $wname
* @return \Pimcore\Model\Object\Workout
*/
public function setWname ($wname) {
	$this->wname = $wname;
	return $this;
}

/**
* Get wdesc - Workout Description
* @return string
*/
public function getWdesc () {
	$preValue = $this->preGetValue("wdesc"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wdesc;
	return $data;
}

/**
* Set wdesc - Workout Description
* @param string $wdesc
* @return \Pimcore\Model\Object\Workout
*/
public function setWdesc ($wdesc) {
	$this->wdesc = $wdesc;
	return $this;
}

/**
* Get reqequipment - Mandatory Equipments for Workout
* @return string
*/
public function getReqequipment () {
	$preValue = $this->preGetValue("reqequipment"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->reqequipment;
	return $data;
}

/**
* Set reqequipment - Mandatory Equipments for Workout
* @param string $reqequipment
* @return \Pimcore\Model\Object\Workout
*/
public function setReqequipment ($reqequipment) {
	$this->reqequipment = $reqequipment;
	return $this;
}

/**
* Get recequipment - Recommended Equipment for Workout
* @return string
*/
public function getRecequipment () {
	$preValue = $this->preGetValue("recequipment"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->recequipment;
	return $data;
}

/**
* Set recequipment - Recommended Equipment for Workout
* @param string $recequipment
* @return \Pimcore\Model\Object\Workout
*/
public function setRecequipment ($recequipment) {
	$this->recequipment = $recequipment;
	return $this;
}

/**
* Get wtime - Time Duration of Workout
* @return float
*/
public function getWtime () {
	$preValue = $this->preGetValue("wtime"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wtime;
	return $data;
}

/**
* Set wtime - Time Duration of Workout
* @param float $wtime
* @return \Pimcore\Model\Object\Workout
*/
public function setWtime ($wtime) {
	$this->wtime = $wtime;
	return $this;
}

/**
* Get wvideo - Workout Video
* @return \Pimcore\Model\Object\Data\Video
*/
public function getWvideo () {
	$preValue = $this->preGetValue("wvideo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wvideo;
	return $data;
}

/**
* Set wvideo - Workout Video
* @param \Pimcore\Model\Object\Data\Video $wvideo
* @return \Pimcore\Model\Object\Workout
*/
public function setWvideo ($wvideo) {
	$this->wvideo = $wvideo;
	return $this;
}

/**
* Get wactive - Workout Active
* @return boolean
*/
public function getWactive () {
	$preValue = $this->preGetValue("wactive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wactive;
	return $data;
}

/**
* Set wactive - Workout Active
* @param boolean $wactive
* @return \Pimcore\Model\Object\Workout
*/
public function setWactive ($wactive) {
	$this->wactive = $wactive;
	return $this;
}

protected static $_relationFields = array (
  'workoutgroupID' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = NULL;

}

