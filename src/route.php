<?php

if (count(URL) != 0) {
    switch (URL[0]) {

            // phan` san pham
            // phan` san pham
        case 'trang-chu':
            ProductController::HomeController();
            break;
        case 'tim-kiem':
            ProductController::SearchController();
            break;
        case 'san-pham':
            ProductController::ProductInfoController();
            break;
        case 'danh-muc':
            ProductController::Category();
            break;
        case 'about':
            ProductController::AboutUs();
            break;
        case 'tuong-tac':
            ProductController::ContactUs();
            break;
            // case 'phan-trang':
            //     ProductController::Pagination();
            //     break;
            // phan` san pham
            // phan` san pham


            //phan` gio hang`
            //phan` gio hang` 
        case 'gio-hang':
            CartController::Cart();
            break;
        case 'thanh-toan':
            CartController::Pay();
            break;
        case 'them-gio-hang':
            CartController::AddCart();
            break;
            //phan` gio hang`
            //phan` gio hang`


            // phan` admin
            // phan` admin
        case 'admin-dk':
            LoginController::Adre();
            break;
        case 'admin':
            LoginController::Admin();
            break;
        case 'dang-ki':
            LoginController::Regi();
            break;
        case 'quen-mat-khau':
            LoginController::Forgot();
            break;
        case 'dang-nhap':
            LoginController::Log();
            break;
        case 'danh-muc-admin':
            AdminController::Admin_danh_muc();
            break;
        case 'san-pham-admin':
            AdminController::Cate();
            break;
        case 'user-admin':
            AdminController::User();
            break;
        case 'user-them':
            AdminController::Admin_them();
            break;
        case 'user-sua':
            AdminController::Admin_sua();
            break;
        case 'product-them':
            AdminController::ProductAdd();
            break;
        case 'product-sua':
            AdminController::ProductChange();
            break;
        case 'category-sua':
            AdminController::CategoryChange();
            break;
        case 'category-them':
            AdminController::CategoryAdd();
            break;

            case 'add-to-cart':
                CartController::AddToCart();
                break;

            // phan` admin
            // phan` admin

            //lam form
            //lam form
        case 'check-login':
            AdminController::Check();
            break;
            // bước 3 : coppy cái bên trên , sửa tên case , sửa tên hàm 
        case 'check-forgot':
            AdminController::CheckForgot();
            break;
        case 'test-1':
            CartController::Test1();
            break;
        case 'test-2':
            CartController::Test2();
            break;
            // bước 4 : quay lại cái form , sửa tên 
            //lam form
            //lam form
        default:
            include ROOT_DIR . '/src/views/admin/404.php';
            break;
    }
} else {
    ProductController::HomeController();
}
