<?php

require_once 'movable.php';
require_once 'speakable.php';

class Human implements Movable, Speakable
{
    public function move() {

    }

    public function speak() {
        echo 'i can speak';
    }
}
$human = new Human();
$human->speak();

$human->eat();