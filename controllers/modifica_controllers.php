<?php 
    class modifica_controllers{
        public static function modifica(){
            $title = "Modifica Datos | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/modificadatos.php");
            require_once("views/template/footer.php");
        }
    }
?>