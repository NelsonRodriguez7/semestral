<?php 
    require_once("models/usuarios_models.php");
    require_once("utils/seg.php");
    require_once("utils/utils.php");
    class registrar_controllers{
        public static function registrar(){
            $imprimir_error = "";
            $title = "Registrar Cuenta| DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/registrar.php");
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
    }
?>