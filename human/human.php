<?php

require_once 'movable.php';
require_once 'speakable.php';
require_once 'eatable.php';

class Human implements Movable, Speakable, Eatable
{
    public function move() {

    }

    public function speak() {
        echo 'i can speak';
    }

    public function eat() {
    	echo 'i can eat';
    }
}
$human = new Human();
$human->speak();

$human->eat();