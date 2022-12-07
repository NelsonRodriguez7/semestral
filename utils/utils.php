<?php
require_once("utils/seg.php");
class utils
{
    public static function enviarcorreo($correo, $id)
    {
        $to = $correo;
        $from = "grupo4@ddinnova.info";
        $name = "Grupo 4";
        $subject = "Activacion de Cuenta";
        $cmessage = "Profe por fa ponganos 100 :)";

        $headers = "From: $from";
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: ". $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $subject = "You have a message from your Bitmap Photography.";

        $logo = 'img/logo.png';
        $link = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("activar") . "&s=" . $id;

        $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
        $body .= "<table style='width: 100%;'>";
        $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
        $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
        $body .= "</td></tr></thead><tbody><tr>";
        $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
        $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
        $body .= "</tr>";
        $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
        $body .= "<tr><td></td></tr>";
        $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
        $body .= "</tbody></table>";
        $body .= "</body></html>";

        echo mail($to, $subject, $body, $headers);
    }

    public static function subir_archivo($archivo_temporal, $archivo, $destino)
    {
        $arreglo = explode(".", $archivo);
        $extension = $arreglo[count($arreglo) - 1];
        $archivo = md5(time() . $archivo) . "." . $extension;
        $destino = $destino . "/" . $archivo;
        if (move_uploaded_file($archivo_temporal, $destino))
            return $destino;
        else
            return null;
    }

}
?>