<?php
    include_once('Persona.php');

    class Empleado extends Persona {

        // Atributos privados
        private $codigo = 0;
        private $nivelAcademico = "";
        private $sueldoBase = 0;
        private $bonificacion = 0; 
        private $igss = 0; 

        //Uso de métodos de acceso 
        // Método set
        public function asignarCodigo($valor) {
            $this->codigo = $valor;
        }
        
        public function asignarNivelAcademico($valor) {
            $this->nivelAcademico = $valor;
        }
        
        public function asignarSueldoBase($valor) {
            $this->sueldoBase = $valor;
        }
        
        public function asignarBonificacion($valor) {
            $this->Bonificacion = $valor;
        }
        
        // Método get
        public function verCodigo() {
            return $this->codigo;
        }

        public function verNivelAcademico() {
            return $this->nivelAcademico;
        }

        public function verSueldoBase() {
            return $this->sueldoBase;
        }

        public function verBonificacion() {
            return $this->bonificacion;
        }
        
        // Método para calcular el sueldo líquido 
        public function calcularSueldoLiquido() {
            $this->igss = $this->verSueldoBase() * 4.83 / 100;
            $sueldoLiquido = $this->verSueldoBase() + $this->verbonificacion() - $this->igss;
            return $sueldoLiquido;
        }

        // Método para mostrar todos los datos 
        public function verDatos() {
            return "<br><strong>Código de empleado: </strong>" . $this->verCodigo()
                . "<br>" . parent::verDatos() 
                . "<br><strong>Nivel: </strong>" . $this->verNivelAcademico()
                . "<br><strong>Sueldo base: </strong>" . $this->verSueldoBase()
                . "<br><strong>Bonificación: </strong>" . $this->verbonificacion() 
                . "<br><strong>IGSS: </strong>" . $this->igss
                . "<br><strong>Sueldo liquido: </strong>" . $this->calcularSueldoLiquido();
        }
    }


?>
