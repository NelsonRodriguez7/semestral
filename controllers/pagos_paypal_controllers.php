<?php
require_once("utils/seg.php");
require_once("models/pagos_paypal.php");
class pagos_paypal_controllers
{
    public static function registar_notificacion()
    {
        $pagos = new pagos_paypal();
        $pagos->registrar($_POST);
    }

    public static function retorno()
    {
        header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Gracias por su pago, su cuenta se ha actualizado satisfactoriamente!!<br>Debes inicar sesion nuevamente para que los cambos sean aplicados");
    }

    public static function cancelar()
    {
        header("location:" . "index.php?c=" . seg::codificar("mensaje") . "&m=" . seg::codificar("index") . "&msg=Has cancelado tu compra!!");
    }
}