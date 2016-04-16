<?php
// тест тест2
class House {
    public $height;
    public $name;

    public function __construct($name='Default name', $height=10) {
        $this->name = $name;
        $this->height = $height;
    }

    public function setHeight($value) {
       $this->height = $value;
    }

    public function getHeight() {
    	return $this->height;
    }

    public function getName() {
    	return $this->name;
    }

    public function setName($name) {
    	return $this->name = $name;
    }
}