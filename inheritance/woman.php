<?php
require_once 'human.php';

class Woman extends Human
{
    public function speak() {
        parent::speak();
        echo ' a lot';
    }

    public function eat() {
        echo 'i can eat';
    }
}