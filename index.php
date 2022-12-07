<?php
    require_once("controllers/principal_controllers.php");
    require_once("controllers/login_controllers.php");
    require_once("controllers/administrar_controllers.php");
    require_once("controllers/aggcategoria_controllers.php");
    require_once("controllers/aggplato_controllers.php");
    require_once("controllers/modifica_controllers.php");
    require_once("controllers/registrar_controllers.php");
    require_once("controllers/menu_controllers.php");
    require_once("controllers/mensaje_controllers.php");
    require_once("controllers/pagos_paypal_controllers.php");
    require_once("utils/seg.php");
    if (count($_GET)==0)
        call_user_func("principal_controllers::index");
    else{
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        call_user_func($controlador."_controllers::".$metodo);   
    }
?>