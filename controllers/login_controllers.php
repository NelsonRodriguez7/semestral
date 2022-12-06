<?php 
    class login_controllers{
        public static function login(){
            $title = "Login | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/login.php");
            require_once("views/template/footer.php");
        }
    }
?>