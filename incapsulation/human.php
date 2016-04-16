<?php

class Human
{
    
    public $age;

    protected $_name;

    public function __construct($name, $age) {
        $this->setName($name);
        $this->age = $age;
    }

    public function __destruct() {
        echo 'unset';
        // TODO: Implement __destruct() method.
    }

    public function setName($name) {
        $this->_name = $this->_validateName($name);
    }

    public function getName() {
        return $this->_name;
    }

    protected function _validateName($name) {
        return str_replace(' ', '-', $name);
    }
}

$human = new Human('John Connor', 25);
$human->setName('John Connor2');

echo $human->getName();