<?php
require_once "house.php";

class City {
	public $name;
	public $housePull = array();

	public function __construct($name) {
        $this->name = $name;
	}

	public function __destruct() {
        echo '<br />';
        echo 'Object delete';
	}

	public function buildHouse(House $objHouse) {
        $this->addHouseToPull($objHouse);
	}

    public function addHouseToPull(House $objHouse) {
    	$this->housePull[$objHouse->getName()] = $objHouse;
    }

    public function destroyHouse($name) {
    	unset($this->housePull[$name]);
    }

    public function getAllHouses() {
    	return $this->housePull;
    }

    public function printAllHouses() {
    	echo $this->name . ' contains following houses: ';
    	echo "<dev>";
    	foreach ($this->getAllHouses() as $house) {
    		echo $house->getName();
    		echo "<br />";
    	}
    }
}

$city = new City('Kharkiv');

$house = new House('First house', 5);
$house1 = $house;
$house1->setName('Modified name');
$city->buildHouse($house);

$house2 = new House();
$city->buildHouse($house2);

$city->printAllHouses();
// some changes