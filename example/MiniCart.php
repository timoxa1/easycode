<?php
require_once 'ShoppingCart.php';

/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 4/14/16
 * Time: 8:52 PM
 */
class MiniCart extends ShoppingCart
{
    public function clearCart() {

    }

    public function addToCart($productId) {
        echo 'mini cart';
    }
}