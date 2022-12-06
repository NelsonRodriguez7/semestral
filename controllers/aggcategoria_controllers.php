<?php 
    class aggcategoria_controllers{
        public static function aggcategoria(){
            $title = "Agregar Categoría | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/agregarcategoria.php");
            require_once("views/template/footer.php");
        }
    }
?>