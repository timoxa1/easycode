<?php
require_once 'man.php';
require_once 'woman.php';

$man = new Man();
$man->speak();

echo '<br />';

$woman = new Woman();
$woman->speak();
$woman->age = 21;