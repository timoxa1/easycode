<?php

/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 4/14/16
 * Time: 8:50 PM
 */
abstract class ShoppingCart
{
    abstract public function addToCart($productId);

    public function someMethod() {
        //some logic
    }
}