<?php
    include_once('Empleado.php');

    class Cobros extends Empleado {

        // Atributos privados 
        private $bonificacion = 0;
        private $comisionCobro = 0;

        //Uso de métodos de acceso 
        // Método set
        public function asignarBonificacion($valor) {
            $this->bonificacion = $valor; 
        }
        
        public function asignarComisionCobro($valor) {
            $this->comisionCobro = $valor; 
        }
        
        // Método get
        public function verBonificacion() {
            return $this->bonificacion; 
        }

        public function verComisionCobro() {
            return $this->comisionCobro; 
        }

        // Método para calcular el sueldo líquido 
        public function calcularSueldoLiquido() {
            $sueldoBase = parent::calcularSueldoLiquido(); 
            $sueldoLiquido = $sueldoBase + $this->verBonificacion() + $this->verComisionCobro(); 
            return $sueldoLiquido; 
        }

        // Método para mostrar todos los datos 
        public function verDatos() {
            $datosEmpleado = parent::verDatos(); 
            $datosCobros = "<br>Bonificación: " . $this->verBonificacion()
                . "<br><strong>Comisión cobro: </strong> " . $this->verComisionCobro()
                . "<br><strong>Sueldo Líquido: </strong> " . $this->calcularSueldoLiquido(); 
            return $datosEmpleado . $datosCobros; 
        }
    }
?>