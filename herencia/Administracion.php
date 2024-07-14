<?php
    include_once('Empleado.php');

    class Administracion extends Empleado {
         
        private $bonificacion = 0;

        //Uso de métodos de acceso 
        // Método set
        public function asignarBonificacion($valor) {
            $this->bonificacion = $valor; 
        }
        
        // Método get
        public function verBonificacion() {
            return $this->bonificacion; 
        }

        // Método para calcular el sueldo líquido 
        public function calcularSueldoLiquido() {
            $sueldoBase = parent::calcularSueldoLiquido(); 
            $sueldoLiquido = $sueldoBase + $this->verBonificacion(); 
        }

        // Método para mostrar todos los datos 
        public function verDatos() {
            $datosEmpleado = parent::verDatos(); 
            $datosAdministracion = "<br><strong>Bonificación: </strong>" . $this->verBonificacion()
                . "<br><strong>Sueldo Líquido: </strong> " . $this->calcularSueldoLiquido(); 
            return $datosEmpleado . $datosAdministracion; 
        }
    }

?>