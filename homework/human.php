<?php

abstract class Human
{
    protected $_age;
    protected $_name;
    protected $_id;

    public function __construct($id, $name, $age) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_age = $age;
    }

    public function getId() {
        return $this->_id;
    }

    public function getAge() {
        return $this->_age;
    }

    public function live(House $house) {
        $house->addCitzien($this);
    }
}