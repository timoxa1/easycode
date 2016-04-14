<?php

require_once 'CustomCart.php';
require_once 'MiniCart.php';

$custom = new CustomCart();
$productId = $_GET['product_id'];
//$productId = 12;
$custom->addToCart($productId);
redirect('homepage');

$mini = new MiniCart();
$mini->addToCart($productId);