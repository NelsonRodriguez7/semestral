<?php 
    class principal_controllers{
        public static function index(){
            $title = "Welcome | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/principal.php");
            require_once("views/template/footer.php");
        }
    }
?>