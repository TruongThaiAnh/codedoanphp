<?php

class ProductController
{
    public static function HomeController()
    {
    
        include_once ROOT_DIR . '/src/views/user/trangchu.php';
    }

    public static function SearchController()
    {
        include_once ROOT_DIR . '/src/views/user/tim-kiem.php';
    }

    public static function GetProductController()
    {
        include_once ROOT_DIR .'/src/views/user/product-page.php';
      
    }
    public static function AboutUs()
    {
        include_once ROOT_DIR . '/src/views/user/about-us.php';
    }

    public static function ContactUs()
    {
        include_once ROOT_DIR . '/src/views/user/contact-us.php';
    }

    public static function Category()
    {
        include_once ROOT_DIR . '/src/views/user/category.php';
    }
    // public static function Pagination()
    // {
    //     include_once ROOT_DIR . '/src/views/user/pagination.php';
    // }
    

}

