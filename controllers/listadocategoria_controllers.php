<?php 
require_once("models/categoria_platos.php");
require_once("utils/seg.php");
    class listadocategoria_controllers{
        public static function listadocategoria(){
            if (!isset($_SESSION["id_usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
                exit();
            }
            $obj = new categoria_plato();
            $obj->set_id_usuario($_SESSION["id_usuario"]);
            $resultado = $obj->listar_categorias();
            $title = "Agregar Categoría | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/menu/listadocategoria.php");
            require_once("views/template/footer.php");
         
        }
        public static function insertar(){
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }
                $descripcion = filter_var($_POST["txtDescripcion"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new categoria_plato();
                $obj->setNombre_categoria($descripcion);
                $obj->set_id_usuario($_SESSION["id_usuario"]);
                $resultados = $obj->insertar();
                if (isset($resultados)) {
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha registrado satisfactoriamente la categoria ");
                } else
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar, intentelo nuevamente!");

            }
        }

        public static function modificar(){
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }

        $id = $_GET["id"];  
        $obj = new categoria_plato();
        $obj->setId($id);
        $resultado = $obj->buscar_categoria();
        $title = "Modificar Categoria | DS 7";
        require_once("views/template/header.php");
        require_once("views/template/nav.php");
        require_once("views/menu/modifcarcategoria.php");
        require_once("views/template/footer.php");
        }
        public static function actualizar(){
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }
                $descripcion = filter_var($_POST["txtDescripcion"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $id =  $_POST["_id"];
                $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new categoria_plato();
                $obj->setId($id);
                $obj->setNombre_categoria($descripcion);
                $obj->set_id_usuario($_SESSION["id_usuario"]);
                $resultados = $obj->actualizar();
                if (isset($resultados)) {
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha registrado satisfactoriamente la categoria ");
                } else
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar, intentelo nuevamente!");
                
            }
        }

        public static function eliminar(){
            $id =  $_GET["id"];
            $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new categoria_plato();
            $obj->setId($id);
            $resultados = $obj->eliminar();
            if ($resultados > 0)
                header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha eliminado  la categoria ");
            else
                header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo eliminar, intentelo nuevamente!");
        }

    }
?>