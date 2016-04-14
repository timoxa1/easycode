<?php

require_once 'CustomCart.php';
require_once 'MiniCart.php';

$custom = new CustomCart();
$productId = 12;
$custom->addToCart($productId);

$mini = new MiniCart();
$mini->addToCart($productId);