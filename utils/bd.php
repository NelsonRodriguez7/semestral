<?php
    class bd{
            public static function connection(){
                require_once("vendor/autoload.php");
                $cadena = "mongodb+srv://ThisNelson:ThisNelson507@semestralds7.yvb4aoz.mongodb.net/?retryWrites=true&w=majority";
                $cliente = new MongoDB\Client($cadena);
                $conexion = $cliente->selectDataBase("semestralds7");
                return $conexion;
            }
    }
?>