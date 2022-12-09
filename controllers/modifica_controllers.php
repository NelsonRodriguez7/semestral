<?php 
require_once("utils/seg.php");
require_once("utils/utils.php");
require_once("models/usuarios_models.php");
    class modifica_controllers{
        public static function modifica(){
            if (!isset($_SESSION["id_usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
                exit();
            }
            $obj = new usuarios();
            $obj->setId($_SESSION["id_usuario"]);
            $resultados = $obj->ver_mis_datos();
            $title = "Modifica Datos | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/modificadatos.php");
            require_once("views/template/footer.php");
        }

        public static function modificar(){
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                
                $nombre_contacto = $_POST["txtNombre"];
                $nombre_empresa = $_POST["txtNombreEmpresa"]; 
                $logo_restaurante = utils::subir_archivo($_FILES["imgLogo"]["tmp_name"],$_FILES["imgLogo"]["name"], "uploads"); 
                $imagen_fondo = utils::subir_archivo($_FILES["imgFondo"]["tmp_name"],$_FILES["imgFondo"]["name"], "uploads");                
                $correo = filter_var($_POST["txtCorreo"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $cuenta_paypal = filter_var($_POST["txtCuentaPaypal"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $nombre_contacto = filter_var($nombre_contacto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $nombre_empresa = filter_var($nombre_empresa, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new usuarios();
                $obj->setId($_SESSION["id_usuario"]);
                $obj->setCorreo($correo);
                $obj->setNombre_contacto($nombre_contacto);
                $obj->setNombre_restaurante($nombre_empresa);
                $obj->setCuenta_paypal($cuenta_paypal);
                $obj->setLogo_empresa($logo_restaurante);
                $obj->setImagen_fondo($imagen_fondo);
    
                $resultados = $obj->actualizar_datos_generales();
                if (isset($resultados)) {
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha modificado satisfactoriamente su cuenta <br><br>Gracias");
                } else
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo actualizar, intentelo nuevamente!");
                
            }
        }

    }
?>