<?php 
    class registrar_controllers{
        public static function registrar(){
            $title = "Registrar Cuenta| DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/registrar.php");
            require_once("views/template/footer.php");
        }
    }
?>