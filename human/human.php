<?php
require_once 'movable.php';
require_once 'speakable.php';
require_once 'eats.php';
class Human implements Movable, Speakable, Eatable
{
    public function move() {

    }
    public function eat() {
        echo 'i can eat';
    }

    public function speak() {
        echo 'i can speak';
    }
}
$human = new Human();
$human->speak();

$human->eat();