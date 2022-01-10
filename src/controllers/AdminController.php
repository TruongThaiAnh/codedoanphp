<?php
class AdminController
{

    public static function Cate()
    {
        $productmodel = new ProductModel();
        $productList = $productmodel->getProduct();

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
        $categoryModel = new CategoryModel();
        $categories =  $categoryModel->getCategories();
        include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
    }
    public static function User()
    {
        include_once ROOT_DIR . '/src/views/admin/admin-user.php';
    }
    //thêm sản phẩm
    public static function ProductAdd()
    {


        $productModels = new ProductModel();
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productImage = $_POST['productImage'];
        $productDescription = $_POST['productDescription'];
        $status = $_POST['status'];
        $lastupdate = $_POST['lastupdate'];
        $sale = $_POST['sale'];

        $addproduct = $productModels->ProductsAdd($productName, $productPrice, $productImage, $productDescription, $status, $lastupdate, $sale);
        include_once ROOT_DIR . '/src/views/admin/product-them.php';
    }
    //sửa sản phẩm
    // public static function ProductChange()
    // {
    //     //     $productModels = new ProductModel();

    //     //     $id = $productst['id'];
    //     //     $productName = $_POST['productName'];
    //     //   $ifo= $productModels->getProductInfo($id,$productName);
    //     //   var_dump($ifo);

    //     include_once ROOT_DIR . '/src/views/admin/product-sua.php';
    //     // }  


    // }
    //sửa danh mục
    public static function CategoryChange()
    {
        $category = new CategoryModel();
        
        
        $categories = $category->getCategories();
       
        //$editcategory = $category->getEditCategory($id);
         //$id = $_GET['categoryt_id'];
        // $name = $_GET['categoryt_name'];
        // $categoryedit = $category->editCategory($name,$id);
        include_once ROOT_DIR . '/src/views/admin/danh-muc-sua.php';
    }
    //thêm danh mục
    public static function CategoryAdd()
    {
        $category = new CategoryModel();
        $categories = $category->getCategories();
        $id = $_POST['categoryt_id'];
        $name = $_POST['categoryt_name'];
        $categoryAdd = $category->addCategory($id, $name);
        if ($categoryAdd) {
            include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
        } else {
            include_once ROOT_DIR . '/src/views/admin/danh-muc-them.php';
        }
    }
    public static function CategoryDelete()
    {
        $category = new CategoryModel();
    }
    public static function ProductDel()
    {
        $id = $_REQUEST['id'];
        $productDel = new ProductModel();
        $productDels = $productDel->deleteProduct($id);
        $productList = $productDel->getProduct();
        include_once ROOT_DIR . '/src/views/admin/admin-product.php';
    }

    //check đăng nhập
    public static function Check()
    {
        //session_start();
        $productModels = new ProductModel();
        $productList = $productModels->getProductsView();
        $pruductHot = $productModels->getProductsBySale();
        $slider = new sliderModel();
        $sliders = $slider->getSliderAll();
        $categoryModel = new CategoryModel();

        $categories =  $categoryModel->getCategories();
        $userModel = new UserModel();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $userModel->login($email, $password);

            if ($user) {
                $_SESSION['email'] = $user["email"];

                //session_start();
                if ($user['role'] == 1) {
                    include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
                } else if ($user['role'] == 0) {
                    include_once ROOT_DIR . '/src/views/user/trangchu.php';
                } else {
                    $failed = "<p style='Color:black'>đăng nhập Failed</p>";
                    echo  $failed;
                    include_once ROOT_DIR . '/src/views/login/login.php';
                }
                
            }
        }
    }

    // bước 2 : copy bên trên , sửa $ theo name từng cái và nhớ tên hàm 
    // bước 2.1 qua bên route
    public static function ProductChange()
    {
        if (!empty($_POST['productName']) && !empty($_POST['productPrice']) && !empty($_POST['productImage']) && !empty($_POST['productDescription']) 
        && !empty($_POST['status']) && !empty($_POST['lastupdate']) && !empty($_POST['sale'])) {
            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productImage = $_POST['productImage'];
            $productDescription = $_POST['productDescription'];
            $status = $_POST['status'];
            $lastupdate = $_POST['lastupdate'];
            $sale = $_POST['sale'];
            var_dump($productName);
            var_dump($productPrice);
            var_dump($productImage);
            var_dump($productDescription);
            var_dump($status);
            var_dump($lastupdate);
            var_dump($sale);

            //bien check de kiem tra dang nhap dung hay sai
            if ($check = true) {
                include ROOT_DIR . '/src/views/admin/product-sua.php'; // neu dung thi chuyen qua trang admin
            } else {
                include ROOT_DIR . '/src/views/admin/404.php'; // sai thi cut
            }
        }  
    }
//check lấy mk
    public static function CheckForgot()
    {
        if (!empty($_POST['forgot'])) {
            $forgot = $_POST['forgot'];
            var_dump($forgot);
        }
    }
}
