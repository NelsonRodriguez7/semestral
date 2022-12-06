<?php
    require_once("utils/bd.php");
    class usuarios{
        private $id;
        private $usuario;
        private $correo;
        private $password;
        private $salt;
        private $nombre_contacto;
        private $nombre_restaurante;
        private $imagen_fondo;
        private $logo_empresa;
        private $tipo_usuario; #1- Administrador, 2-Cliente
        private $fecha_registro;
        private $monto_pago;
        private $status;
        private $cuenta_paypal;

        public function __construct()
        {  
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

        /**
         * Get the value of usuario
         */
        public function getUsuario()
        {
            return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */
        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;

            return $this;
        }

        /**
         * Get the value of correo
         */
        public function getCorreo()
        {
            return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */
        public function setCorreo($correo)
        {
            $this->correo = $correo;

            return $this;
        }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */
        public function setPassword($password)
        {
            $this->password = $password;

            return $this;
        }

        /**
         * Get the value of nombre_contacto
         */
        public function getNombre_contacto()
        {
            return $this->nombre_contacto;
        }

        /**
         * Set the value of nombre_contacto
         *
         * @return  self
         */
        public function setNombre_contacto($nombre_contacto)
        {
            $this->nombre_contacto = $nombre_contacto;

            return $this;
        }

        /**
         * Get the value of nombre_restaurante
         */
        public function getNombre_restaurante()
        {
            return $this->nombre_restaurante;
        }

        /**
         * Set the value of nombre_restaurante
         *
         * @return  self
         */
        public function setNombre_restaurante($nombre_restaurante)
        {
            $this->nombre_restaurante = $nombre_restaurante;

            return $this;
        }

        /**
         * Get the value of imagen_fondo
         */
        public function getImagen_fondo()
        {
            return $this->imagen_fondo;
        }

        /**
         * Set the value of imagen_fondo
         *
         * @return  self
         */
        public function setImagen_fondo($imagen_fondo)
        {
            $this->imagen_fondo = $imagen_fondo;

            return $this;
        }

        /**
         * Get the value of logo_empresa
         */
        public function getLogo_empresa()
        {
            return $this->logo_empresa;
        }

        /**
         * Set the value of logo_empresa
         *
         * @return  self
         */
        public function setLogo_empresa($logo_empresa)
        {
            $this->logo_empresa = $logo_empresa;

            return $this;
        }

        /**
         * Get the value of tipo_usuario
         */
        public function getTipo_usuario()
        {
            return $this->tipo_usuario;
        }

        /**
         * Set the value of tipo_usuario
         *
         * @return  self
         */
        public function setTipo_usuario($tipo_usuario)
        {
            $this->tipo_usuario = $tipo_usuario;

            return $this;
        }

        /**
         * Get the value of fecha_registro
         */
        public function getFecha_registro()
        {
            return $this->fecha_registro;
        }

        /**
         * Set the value of fecha_registro
         *
         * @return  self
         */
        public function setFecha_registro($fecha_registro)
        {
            $this->fecha_registro = $fecha_registro;

            return $this;
        }

        /**
         * Get the value of monto_pago
         */
        public function getMonto_pago()
        {
            return $this->monto_pago;
        }

        /**
         * Set the value of monto_pago
         *
         * @return  self
         */
        public function setMonto_pago($monto_pago)
        {
            $this->monto_pago = $monto_pago;

            return $this;
        }

        /**
         * Get the value of status
         */
        public function getStatus()
        {
            return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */
        public function setStatus($status)
        {
            $this->status = $status;

            return $this;
        }

        /**
         * Get the value of cuenta_paypal
         */
        public function getCuenta_paypal()
        {
            return $this->cuenta_paypal;
        }

        /**
         * Set the value of cuenta_paypal
         *
         * @return  self
         */
        public function setCuenta_paypal($cuenta_paypal)
        {
            $this->cuenta_paypal = $cuenta_paypal;

            return $this;
        }
    }
?>