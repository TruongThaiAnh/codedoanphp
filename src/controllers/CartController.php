<?php
class CartController 
{
    public static function Cart() {
        include_once ROOT_DIR . '/src/views/user/shopping-cart.php';
    }

    public static function Pay() {
        include_once ROOT_DIR . '/src/views/user/payment-page.php';
    }
}