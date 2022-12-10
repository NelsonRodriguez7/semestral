<?php 
    require_once("models/usuarios_models.php");
    require_once("utils/seg.php");
    require_once("utils/utils.php");
    require_once("models/plato.php");
    require_once("models/categoria_platos.php");
    class registrar_controllers{
        public static function registrar(){
            $imprimir_error = "";
            $title = "Registrar Cuenta| DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/registrar.php");
            require_once("views/template/footer.php");
        }
        public static function registrar2(){
            $imprimir_error = "";
            $title = "Registrar Cuenta| DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/registrar2.php");
            require_once("views/template/footer.php");
        }

        public static function insertar()
        {
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                !($_POST["registrorepetirpassword"] == $_POST["registropassword"]) ? $error = "Los password no coinciden" : "";
                $nombre_contacto = $_POST["registronombre"];
                $nombre_empresa = $_POST["registrorestaurante"];

                if (isset($error)) {
                    $imprimir_error = $error;
                    $title = "Registrar Cuenta| DS 7";
                    require_once("views/template/header.php");
                    require_once("views/template/nav.php");
                    require_once("views/formularios/registrar.php");
                    require_once("views/template/footer.php");
                } else {
                    $usuario = filter_var($_POST["registrousuario"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $correo = filter_var($_POST["registrocorreouser"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $password = filter_var($_POST["registropassword"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_contacto = filter_var($nombre_contacto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_empresa = filter_var($nombre_empresa, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $cuenta_paypal = filter_var($_POST["registrocorreopaypal"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $obj = new usuarios();
                    $obj->setUsuario($usuario);
                    $obj->setCorreo($correo);
                    $obj->setPassword($password);
                    $obj->setNombre_contacto($nombre_contacto);
                    $obj->setNombre_restaurante($nombre_empresa);
                    $obj->setCuenta_paypal($cuenta_paypal);
                    $resultados = $obj->insertar();
                    if (isset($resultados)) {
                        utils::enviarcorreo($resultados->getCorreo(), $resultados->getId());
                        header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha registrado satisfactoriamente <br>Revise su correo para activar la cuenta y continuar con el pago. <br><br>Gracias");
                    } else
                        header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar, intentelo nuevamente!");
                }
            }
        }

        public static function vercodigoqr()
        {

            if (!isset($_SESSION["usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar, intentelo nuevamente!");
                exit();
            }
            
            $url= $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("registrar") . "&m=" . seg::codificar("ver_menu") . "&id=" . $_SESSION["id_usuario"] ;  
            $title="Qr";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/vercodigoqr.php");
            require_once("views/template/footer.php");
        }

        public static function ver_menu()
        {
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
            require_once("views/template/nav.php");
            require_once("views/menu/menu.php");
            require_once("views/template/footer.php");

          
           
          
        }





    }
?>