<?php

    class Persona {
        
        // Atributos privados
        private $nombre = "";
        private $apellido = "";
        private $telefono = 0;
        private $direccion = "";

        //Uso de métodos de acceso 
        // Método set
        public function asignarNombre($valor) {
            $this->nombre = $valor;
        }
        
        public function asignarApellido($valor) {
            $this->apellido = $valor;
        }
        
        public function asignarTelefono($valor) {
            $this->telefono = $valor;
        }
        
        public function asignarDireccion($valor) {
            $this->direccion = $valor;
        }
        
        // Método get
        public function verNombreCompleto() {
            return $this->nombre . " " . $this->apellido;
        }

        public function verNombre() {
            return $this->nombre;
        }

        public function verApellido() {
            return $this->apellido;
        }

        public function verTelefono() {
            return $this->telefono;
        }

        public function verDireccion() {
            return $this->direccion;
        }

        // Método para mostrar todos los datos 
        public function verDatos() {
            return "<strong>Nombre completo: </strong>" . $this->verNombreCompleto()
                . "<br><strong>Teléfono: </strong>" . $this->verTelefono()
                . "<br><strong>Dirección: </strong>" . $this->verDireccion();
        }
    }

?>
