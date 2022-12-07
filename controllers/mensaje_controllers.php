<?php
    class mensaje_controllers{
        public static function index(){
            $mensaje=$_GET["msg"];
            $title = "Informacion | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav2.php");
            require_once("views/mensajes.php");
            require_once("views/template/footer.php");
        }
    }
?>