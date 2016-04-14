<?php
require_once 'ShoppingCart.php';

/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 4/14/16
 * Time: 8:52 PM
 */
class CustomCart extends ShoppingCart
{
    public function addToCart($productId) {
        echo $productId . ' has been added to cart';
    }
}