<?php
class CartController
{
    public static function Cart()

    {
        $giohang = $_SESSION["cart"];
        var_dump($giohang);
        die();
        include_once ROOT_DIR . '/src/views/user/shopping-cart.php';
    }

    public static function Pay()
    {
        include_once ROOT_DIR . '/src/views/user/payment-page.php';
    }

    public static function Addcart()
    {
        $productCart = new ProductModel();

        if (count(URL) > 1) {
            /**
             * Tách chuỗi tên-id thành 2 biến name và id
             */

            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";

            $carts = $productCart->getProductInfo($id, $name);
            if (!empty($carts)) {
                if (empty($_SESSION["cart"])) {
                    $_SESSION["cart"] = [$carts];
                } else {
                    if (!in_array($carts, $_SESSION['cart'])) {
                        array_push($_SESSION["cart"], $carts);
                    }
                }
            }else{
                include ROOT_DIR . '/src/views/admin/404.php';  
            }
        } else {
            include ROOT_DIR . '/src/views/admin/404.php';
        }
        // unset($_SESSION["cart"]);

     
    }
    public static function AddToCart(){
        if(!empty(URL[1])){
            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";
            var_dump($id);
            var_dump($name);

            // header("Location: " . BASE_URL .'/san-pham/' . URL[1] );

        } else{
            include ROOT_DIR . '/src/views/admin/404.php';
        }

    }
    public static function Test1(){
       
        include ROOT_DIR . '/src/views/user/test.php'; 
    }

    public static function Test2(){
       var_dump($_POST);

}                       
}