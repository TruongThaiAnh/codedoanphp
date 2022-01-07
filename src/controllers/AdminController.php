<?php
class AdminController
{

    public static function Cate()
    {
        include_once ROOT_DIR . '/src/views/admin/admin-product.php';
    }
    public static function Admin_them()
    {
        include_once ROOT_DIR . '/src/views/admin/user-them.php';
    }
    public static function Admin_sua()
    {
        include_once ROOT_DIR . '/src/views/admin/user-sua.php';
    }
    public static function Admin_danh_muc()
    {
        include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
    }
    public static function User()
    {
        include_once ROOT_DIR . '/src/views/admin/admin-user.php';
    }
    public static function ProductAdd()
    {
        include_once ROOT_DIR . '/src/views/admin/product-them.php';
    }
    public static function ProductChange()
    {
        include_once ROOT_DIR . '/src/views/admin/product-sua.php';
    }
    public static function CategoryChange()
    {
        include_once ROOT_DIR . '/src/views/admin/danh-muc-sua.php';
    }
    public static function CategoryAdd()
    {
        include_once ROOT_DIR . '/src/views/admin/danh-muc-them.php';
    }

    public static function Check()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            var_dump($email);
            var_dump($password);
            //bien check de kiem tra dang nhap dung hay sai
            if ($check = true) {
                include ROOT_DIR . '/src/views/admin/admin-danhmuc.php'; // neu dung thi chuyen qua trang admin
            } else {
                include ROOT_DIR . '/src/views/admin/404.php'; // sai thi cut
            }
        }
    }

    // bước 2 : copy bên trên , sửa $ theo name từng cái và nhớ tên hàm 
    // bước 2.1 qua bên route
    public static function CheckForgot()
    {
        if (!empty($_POST['forgot'])) {
            $forgot = $_POST['forgot'];
            var_dump($forgot);
        }
    }
}
