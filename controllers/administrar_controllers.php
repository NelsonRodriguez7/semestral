<?php 
    require_once("models/pagos_paypal.php");
    class administrar_controllers{
        public static function administrar(){
            $title = "Administrar Cuenta | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/formularios/administrarcuenta.php");
            require_once("views/template/footer.php");
        }

        public static function ver_pago(){
            $id=$_SESSION["id_usuario"];
            $obj = new pagos_paypal();
            $obj->setId($id);
            $datos_paypal = $obj->ver_pagopaypal();
            $title = "Ver Pagos | DS 7";
            require_once("views/template/header.php");
            require_once("views/template/nav.php");
            require_once("views/menu/ver_pago.php");
            require_once("views/template/footer.php");
        }
    }
?>