<?php 
    class principal_controllers{
        public static function index(){
            if (isset($_COOKIE["usuario"]))
            {
                $_SESSION["nombre"]=seg::decodificar($_COOKIE["nombre"]);
                $_SESSION["usuario"]=seg::decodificar($_COOKIE["usuario"]);
            }
            $title = "Welcome | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/principal.php");
            require_once("views/template/footer.php");
        }
    }
?>