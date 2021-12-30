<?php
class LoginController 
{
    public static function Log() {
        include_once ROOT_DIR . '/src/views/login/login.php';
    }
    public static function Adre() {
        include_once ROOT_DIR . '/src/views/login/ad-re.php';
    }
    public static function Admin() {
        include_once ROOT_DIR . '/src/views/login/admin.php';
    }
    public static function Regi() {
        include_once ROOT_DIR . '/src/views/login/register.php';
    }
    public static function Forgot() {
        include_once ROOT_DIR . '/src/views/login/forgot-password.php';
    }

   

   
}