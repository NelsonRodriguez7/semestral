<?php 
require_once("models/usuarios_models.php");
require_once("utils/seg.php");
    class cambiarcontra_controllers{
        public static function cambiarcontra(){
            $imprimir_error = "";
            $title = "Cambiar Contraseña | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/cambiarcontra.php");
            require_once("views/template/footer.php");
        }
        public static function actualizar(){
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }
                
                $contra = filter_var($_POST["contra"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $contrarepetida = filter_var($_POST["contrarepetida"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $nuevacontra = filter_var($_POST["nuevacontra"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                !($_POST["contrarepetida"] == $_POST["contra"]) ? $error = "Los password no coinciden" : "";
                $obj = new usuarios();
                $obj->setUsuario($_SESSION["usuario"]);
                $obj->setPassword($contra);
                $resultado = $obj->valida_usuario();
                if (isset($error)) {
                    $imprimir_error = $error;
                    $title = "Cambiar Contraseña | DS 7";
                    require_once("views/template/header.php");
                    require_once("views/template/nav.php");
                    require_once("views/formularios/cambiarcontra.php");
                    require_once("views/template/footer.php");
                } else { 
                
                    if (count($resultado) > 0) {
                        $obj->setId($_SESSION["id_usuario"]);
                        $obj->setPassword($nuevacontra);
                        $obj->setUsuario($_SESSION["usuario"]);
                        $resultados = $obj->actualizarcontra();
                        if (isset($resultados)) {
                            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Se ha cambiado exitosamente su contraseña ");
                        } else
                            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo registrar su nueva contraseña, intentelo nuevamente!");
                    }else{
                        header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=La Contraseña Actual no es correcta ");
                    }
                
                } 
                
            }
        } 
    }
?>