<?php 
    require_once("models/usuarios_models.php");
    require_once("utils/seg.php");
    require_once("utils/utils.php");
    class login_controllers{
        public static function login(){
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Login | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/login.php");
            require_once("views/template/footer.php");
        }
        public static function login2(){
            $id=$_GET["id"];
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Login | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav3.php");
            require_once("views/formularios/login2.php");
            require_once("views/template/footer.php");
        }

        public static function validar_usuario()
        {
        $id=$_GET["id"];
        if ($_POST) {
            if (!isset($_POST["token"]) ||  !seg::validaSesion($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }
            $obj = new usuarios();
            $obj->setUsuario($_POST["loginusuario"]);
            $obj->setPassword($_POST["loginpassword"]);
            $resultado = $obj->valida_usuario();

            if (count($resultado) > 0) {
                if ($resultado->status == "0") {
                    header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=El usuario todavía no ha confirmado el correo");
                    exit();
                }
                $_SESSION["nombre_contacto"] =  $resultado["nombre_contacto"];
                $_SESSION["usuario"] = $resultado["usuario"];
                $_SESSION["correo"] = $resultado["correo"];
                $_SESSION["id_usuario"] = $resultado["_id"];
                $_SESSION["monto_pago"] = $resultado["monto_pago"];
                $_SESSION["cuenta_paypal"] = $resultado["cuenta_paypal"];
                $_SESSION["tipo_usuario"] = $resultado["tipo_usuario"];
                if (isset($_POST["chkRecordar"])) {
                    setcookie(seg::codificar("nombre"),  seg::codificar($resultado["nombre"]), time() + 40);
                    setcookie(seg::codificar("usuario"),  seg::codificar($resultado["usuario"]), time() + 40);
                }
                if($_SESSION["tipo_usuario"]==1){
                    header("location:index.php");
                }else{
                    header("location:" . "index.php?c=" . seg::codificar("menu") . "&m=" . seg::codificar("menu"). "&id=" . $id);
                }
                
            } else
                header("location:" . "index.php?c=" . seg::codificar("login") . "&m=" . seg::codificar("login") . "&msg=Usuario o Contraseña incorrectos");
        }
        }

        public static function activar()
        {
        $obj = new usuarios();
        $obj->setId($_GET["s"]);
        $resultado = $obj->activar_usuario();
        if ($resultado == 1) {
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Ya has activado tu cuenta, puedes entrar");
        } else
            header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=No se pudo activar tu cuenta. Intenta más tarde");
        }

        public static function cerrar_sesion()
        {
        session_destroy();
        header("location:index.php");
        }
        public static function cerrar_sesion2()
        {
        session_destroy(); 
        $id=$_GET["id"];
        header("location:" . "index.php?c=" . seg::codificar("menu") . "&m=" . seg::codificar("menu"). "&id=" . $id);
            
        }
    }
?>