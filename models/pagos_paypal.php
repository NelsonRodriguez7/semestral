<?php
require_once("utils/bd.php");
require_once("models/usuarios_models.php");

class pagos_paypal
{
    private $id;
    public function registrar()
    {
        $id_usuario=$_SESSION["id_usuario"];
        $usuario=$_SESSION["usuario"];
        $correo=$_SESSION["correo"];
        $cuenta_paypal=$_SESSION["cuenta_paypal"];
        $monto_pago = 49.99;
        $datos[] = [];
        $datos = array("id_usuario" => $id_usuario,"usuario"=>$usuario,"correo"=>$correo,"cuenta_paypal"=>$cuenta_paypal,"monto_pago"=>$monto_pago);
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        try {
            $resultados = $coleccion->insertOne($datos);
            $coleccion = $conexion->usuario;
            try {
                $resultados = $coleccion->updateOne(
                    ["_id" => $id_usuario],
                    ['$set' => [
                        "monto_pago" => $monto_pago
                    ]]
                );
                $_SESSION["monto_pago"] = $monto_pago;
                return $resultados->getModifiedCount();
            } catch (Exception $e) {
                return 0;
            }
        } catch (Exception $e) {
        }
    }

    public function ver_pagopaypal(){
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        $resultado = $coleccion->find(["id_usuario" => ($this->id)]);
        return $resultado;
    }

    public function getId()
        {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
    public function setId($id)
        {
            $this->id = $id;

            return $this;
        }
}