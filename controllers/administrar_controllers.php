<?php 
    class administrar_controllers{
        public static function administrar(){
            $title = "Administrar Cuenta | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/administrarcuenta.php");
            require_once("views/template/footer.php");
        }
    }
?>