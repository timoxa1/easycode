<?php
require_once 'human.php';

class Man extends Human
{
    public function speak() {
        parent::speak();
        echo ' a little bit';
    }

    public function eat() {

    }
}