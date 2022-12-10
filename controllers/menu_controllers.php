<?php 
   require_once("utils/seg.php");
   require_once("models/categoria_platos.php");
   require_once("models/usuarios_models.php");
   require_once("models/plato.php");
    class menu_controllers{
        public static function menu(){
            $id=$_GET["id"];
            $obj = new usuarios();
            $obj->setId($id);
            $datos = $obj->ver_mis_datos();
            $nombre_empresa = $datos["nombre_restaurante"];
            $logo = $datos["logo_empresa"];
            $imagenfondo = $datos["imagen_fondo"];
            
            $obj = new categoria_plato();
            $obj->set_id_usuario(new MongoDB\BSON\ObjectId($id));
            $listar_categoria = $obj->listar_categorias();
            foreach ($listar_categoria as $l)
            $listaCat[] = $l;
           
            $objplatos = new plato();
            $objplatos->set_id_usuario(new MongoDB\BSON\ObjectId($id));
            $lista_plato = $objplatos->listar_platos();
            foreach ($lista_plato as $p)
            $listaPlat[] = $p;
            
            $title = "Menú | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav3.php");
            require_once("views/menu/menu.php");
            require_once("views/template/footer.php");
            
        }

















    }
?>