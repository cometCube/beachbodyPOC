<?php 

/** Generated at 2016-02-23T06:32:13+01:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Program getByPdesc ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Program getByPtype ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Program getByPfeatures ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Program getByPactive ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Program getByTrainerID ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Program getByPname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Program getByPimage ($value, $limit = 0) 
*/

class Program extends Concrete {

public $o_classId = 2;
public $o_className = "program";
public $pdesc;
public $ptype;
public $pfeatures;
public $pactive;
public $trainerID;
public $pname;
public $pimage;


/**
* @param array $values
* @return \Pimcore\Model\Object\Program
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get pdesc - Program Description
* @return string
*/
public function getPdesc () {
	$preValue = $this->preGetValue("pdesc"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->pdesc;
	return $data;
}

/**
* Set pdesc - Program Description
* @param string $pdesc
* @return \Pimcore\Model\Object\Program
*/
public function setPdesc ($pdesc) {
	$this->pdesc = $pdesc;
	return $this;
}

/**
* Get ptype - Program Type
* @return string
*/
public function getPtype () {
	$preValue = $this->preGetValue("ptype"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ptype;
	return $data;
}

/**
* Set ptype - Program Type
* @param string $ptype
* @return \Pimcore\Model\Object\Program
*/
public function setPtype ($ptype) {
	$this->ptype = $ptype;
	return $this;
}

/**
* Get pfeatures - Program Features
* @return string
*/
public function getPfeatures () {
	$preValue = $this->preGetValue("pfeatures"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->pfeatures;
	return $data;
}

/**
* Set pfeatures - Program Features
* @param string $pfeatures
* @return \Pimcore\Model\Object\Program
*/
public function setPfeatures ($pfeatures) {
	$this->pfeatures = $pfeatures;
	return $this;
}

/**
* Get pactive - Program Active
* @return boolean
*/
public function getPactive () {
	$preValue = $this->preGetValue("pactive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->pactive;
	return $data;
}

/**
* Set pactive - Program Active
* @param boolean $pactive
* @return \Pimcore\Model\Object\Program
*/
public function setPactive ($pactive) {
	$this->pactive = $pactive;
	return $this;
}

/**
* Get trainerID - Trainer ID for Program
* @return array
*/
public function getTrainerID () {
	$preValue = $this->preGetValue("trainerID"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("trainerID")->preGetData($this);
	return $data;
}

/**
* Set trainerID - Trainer ID for Program
* @param array $trainerID
* @return \Pimcore\Model\Object\Program
*/
public function setTrainerID ($trainerID) {
	$this->trainerID = $this->getClass()->getFieldDefinition("trainerID")->preSetData($this, $trainerID);
	return $this;
}

/**
* Get pname - Program Name
* @return string
*/
public function getPname () {
	$preValue = $this->preGetValue("pname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->pname;
	return $data;
}

/**
* Set pname - Program Name
* @param string $pname
* @return \Pimcore\Model\Object\Program
*/
public function setPname ($pname) {
	$this->pname = $pname;
	return $this;
}

/**
* Get pimage - Program Image
* @return \Pimcore\Model\Asset\Image
*/
public function getPimage () {
	$preValue = $this->preGetValue("pimage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->pimage;
	return $data;
}

/**
* Set pimage - Program Image
* @param \Pimcore\Model\Asset\Image $pimage
* @return \Pimcore\Model\Object\Program
*/
public function setPimage ($pimage) {
	$this->pimage = $pimage;
	return $this;
}

protected static $_relationFields = array (
  'trainerID' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = NULL;

}

