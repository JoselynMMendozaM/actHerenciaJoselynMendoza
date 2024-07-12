<?php
    class Persona{

        //atributos
        private $nombre="";
        private $apellido = "";
        private $telefono = 0;
        private $direccion = "";

        //Uso de métodos de acceso 
        // Método set
        public function asignarDatos(){
            return ."Nombre Completo: ".$this->nombre ." ".$this->apellido
            ."Teléfono: ".$this->telefono
            ."Dirección: ".$this->direccion;
        }

        // Método get
        public function verDatos(){
            return ."Nombre Completo: ".$this->nombre ." ".$this->apellido
            ."<br>Teléfono: ".$this->telefono
            ."<br>Dirección: ".$this->direccion;
        }


    }

?>