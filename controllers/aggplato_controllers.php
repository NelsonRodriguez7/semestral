<?php 
    class aggplato_controllers{
        public static function aggplato(){
            $title = "Agregar Plato | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/agregarplato.php");
            require_once("views/template/footer.php");
        }
    }
?>