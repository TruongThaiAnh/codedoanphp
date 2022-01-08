<?php 
class AdminController {

    public static function Cate() {
        $productmodel = new ProductModel();
        $productList = $productmodel->getProduct();

        include_once ROOT_DIR . '/src/views/admin/admin-product.php';
    }
    public static function Admin_them() {
        include_once ROOT_DIR . '/src/views/admin/user-them.php';
    }
    public static function Admin_sua() {
        include_once ROOT_DIR . '/src/views/admin/user-sua.php';
    }
    public static function Admin_danh_muc() {
        $categoryModel = new CategoryModel();
        $categories =  $categoryModel->getCategories();
        include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
    }
    public static function User() {
        include_once ROOT_DIR . '/src/views/admin/admin-user.php';
    }
    public static function ProductAdd() {
        include_once ROOT_DIR . '/src/views/admin/product-them.php';
    }
    public static function ProductChange() {
        include_once ROOT_DIR . '/src/views/admin/product-sua.php';
    }
    public static function CategoryChange() {
        include_once ROOT_DIR . '/src/views/admin/danh-muc-sua.php';
    }
    public static function CategoryAdd() {
        include_once ROOT_DIR . '/src/views/admin/danh-muc-them.php';
    }

    public static function Check(){
        // if(!empty( $_POST['email']) && !empty($_POST['password'])){
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];
        //     var_dump( $email);
        //     var_dump($password);
        // }
        $productModels = new ProductModel();
        $productList = $productModels->getProductsView();
        $pruductHot = $productModels->getProductsBySale();
        $slider = new sliderModel();
        $sliders = $slider->getSliderAll();
        $categoryModel = new CategoryModel();

        $categories =  $categoryModel->getCategories();
            $userModel = new UserModel();
            if(isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
               
                $user = $userModel->login($email, $password);
             
            if($user ) {
            $_SESSION['email'] = $user;
        
       //session_start();
      if($user['role'] == 1) {
        include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
      }
      else if($user['role'] == 0) {
        include_once ROOT_DIR . '/src/views/user/trangchu.php';
      }
      else{
        $failed="<p style='Color:black'>đăng nhập Failed</p>";
        echo  $failed;
      }
            }
        }
    }
    // bước 2 : copy bên trên , sửa $ theo name từng cái và nhớ tên hàm 
    // bước 2.1 qua bên route
    public static function CheckForgot(){
        if(!empty( $_POST['forgot']) ){
            $forgot = $_POST['forgot'];
            var_dump($forgot);
        }
    }
}