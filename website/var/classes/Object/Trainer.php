<?php 

/** Generated at 2016-02-23T05:34:09+01:00 */

/**
* Class to Add Trainers.
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Trainer getByTname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Trainer getBySpeciality ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Trainer getByTfeatures ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Trainer getByTimgage ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Trainer getByTactive ($value, $limit = 0) 
*/

class Trainer extends Concrete {

public $o_classId = 1;
public $o_className = "trainer";
public $tname;
public $speciality;
public $tfeatures;
public $timgage;
public $tactive;


/**
* @param array $values
* @return \Pimcore\Model\Object\Trainer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get tname - Trainer Name
* @return string
*/
public function getTname () {
	$preValue = $this->preGetValue("tname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tname;
	return $data;
}

/**
* Set tname - Trainer Name
* @param string $tname
* @return \Pimcore\Model\Object\Trainer
*/
public function setTname ($tname) {
	$this->tname = $tname;
	return $this;
}

/**
* Get speciality - Speciality
* @return string
*/
public function getSpeciality () {
	$preValue = $this->preGetValue("speciality"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->speciality;
	return $data;
}

/**
* Set speciality - Speciality
* @param string $speciality
* @return \Pimcore\Model\Object\Trainer
*/
public function setSpeciality ($speciality) {
	$this->speciality = $speciality;
	return $this;
}

/**
* Get tfeatures - Trainer Features
* @return string
*/
public function getTfeatures () {
	$preValue = $this->preGetValue("tfeatures"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tfeatures;
	return $data;
}

/**
* Set tfeatures - Trainer Features
* @param string $tfeatures
* @return \Pimcore\Model\Object\Trainer
*/
public function setTfeatures ($tfeatures) {
	$this->tfeatures = $tfeatures;
	return $this;
}

/**
* Get timgage - Trainer Image
* @return \Pimcore\Model\Asset\Image
*/
public function getTimgage () {
	$preValue = $this->preGetValue("timgage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timgage;
	return $data;
}

/**
* Set timgage - Trainer Image
* @param \Pimcore\Model\Asset\Image $timgage
* @return \Pimcore\Model\Object\Trainer
*/
public function setTimgage ($timgage) {
	$this->timgage = $timgage;
	return $this;
}

/**
* Get tactive - Trainer Active
* @return boolean
*/
public function getTactive () {
	$preValue = $this->preGetValue("tactive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tactive;
	return $data;
}

/**
* Set tactive - Trainer Active
* @param boolean $tactive
* @return \Pimcore\Model\Object\Trainer
*/
public function setTactive ($tactive) {
	$this->tactive = $tactive;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

