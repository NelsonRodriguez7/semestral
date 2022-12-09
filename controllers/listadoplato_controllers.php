<?php
require_once("utils/seg.php");
require_once("utils/utils.php");
require_once("models/plato.php");
require_once("models/categoria_platos.php");
class listadoplato_controllers
{

    public static function mostrar()
    {
        $title = "Mostrar Plato | DS 7";
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No tiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }
        if (isset($_GET["msg"])) $msg=$_GET["msg"];

        $obj = new plato();
        $obj->set_id_usuario($_SESSION["id_usuario"]);
        $resultado = $obj->listar_platos();
        

        require_once("views/template/header.php");
        require_once("views/template/nav.php");
        require_once("views/menu/listadoplato.php");
        require_once("views/template/footer.php");
    }

    public static function registro($error=[], $nombre="", $descripcion="", $precio="")
    {
        $title = "Registro Plato | DS 7";
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }
        
        $obj = new categoria_plato();
        $obj->set_id_usuario($_SESSION["id_usuario"]);
        $lista_categoria = $obj->listar_categorias();

        $obj = new usuarios();
        $obj->setId($_SESSION["id_usuario"]);
        $resultados = $obj->ver_mis_datos();
        require_once("views/template/header.php");
        require_once("views/template/nav.php");
        require_once("views/formularios/agregarplato.php");
        require_once("views/template/footer.php");
    }

    public static function insertar()
    {
        
        if ($_POST) {
            if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            $nombre="";
            $descripcion="";
            $precio="";
            
                      

            $id_categoria = $_POST["lstCategoria"];
                $nombre = filter_var($_POST["aggnombre"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $descripcion = filter_var($_POST["aggdescrip"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $precio = filter_var($_POST["aggprecio"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $foto = utils::subir_archivo($_FILES["txtFoto"]["tmp_name"],$_FILES["txtFoto"]["name"], "uploads");
                
                $id_categoria = filter_var($id_categoria, FILTER_SANITIZE_FULL_SPECIAL_CHARS);



                $obj = new plato();
                $obj->setNombre_plato($nombre);
                $obj->setDescripcion_plato($descripcion);
                $obj->setPrecio_plato($precio);
                $obj->setFoto_plato($foto);
                $obj->set_id_categoria($id_categoria);
                $obj->set_id_usuario($_SESSION["id_usuario"]);
                $resultados = $obj->insertar();
                if (isset($resultados)) {
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha registrado satisfactoriamente el plato ");
                } else
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar, intentelo nuevamente!");
        }
    }


    public static function eliminar()
    {
        $id =  $_GET["id"];
        $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $obj = new plato();
        $obj->setId($id);
        $resultados = $obj->eliminar();
        if ($resultados > 0)
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha eliminado  el plato ");
        else
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo eliminar, intentelo nuevamente!");
    }

    public static function modificar(){
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }
        $obj = new categoria_plato();
        $obj->set_id_usuario($_SESSION["id_usuario"]);
        $lista_categoria = $obj->listar_categorias();
        $id = $_GET["id"];  
        $obj = new plato();
        $obj->setId($id);
        $resultado = $obj->buscar_plato();
        $title = "Modificar Plato| DS 7";
        require_once("views/template/header.php");
        require_once("views/template/nav.php");
        require_once("views/menu/modificarplato.php");
        require_once("views/template/footer.php");
        }

        public static function actualizar(){
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }
                $nombre_plato = filter_var($_POST["nombre_plato"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $descripcion_plato = filter_var($_POST["descripcion_plato"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $precio_plato = filter_var($_POST["precio_plato"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $foto = utils::subir_archivo($_FILES["txtFoto"]["tmp_name"],$_FILES["txtFoto"]["name"], "uploads");
                
             
                $id =  $_POST["_id"];
                $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new plato();
                $obj->setId($id);
                $obj->setnombre_plato($nombre_plato);
                $obj->setPrecio_plato($precio_plato);
                $obj->setDescripcion_plato($descripcion_plato);
                $obj->set_id_categoria($id_categoria);
                $obj->setFoto_plato($foto);
              

                $obj->set_id_usuario($_SESSION["id_usuario"]);
                $resultados = $obj->actualizar();
                if (isset($resultados)) {
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha registrado satisfactoriamente la categoria ");
                } else
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar, intentelo nuevamente!");
                
            }
        }




}