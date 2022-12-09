<?php 
   require_once("utils/seg.php");
   require_once("models/categoria_platos.php");
   require_once("models/plato.php");
    class menu_controllers{
        public static function menu(){
            $id=$_GET["id"];
            $obj = new categoria_plato();
            $obj->set_id_usuario($id);
            $listar_categoria = $obj->listar_categorias();


            $obj = new plato();
            $obj->set_id_usuario($id);
            $listar_plato = $obj->listar_platos();

            $title = "Menú | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/menu/menu2.php");
            require_once("views/template/footer.php");


            
        }

















    }
?>