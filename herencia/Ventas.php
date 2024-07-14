<?php
    include_once('Empleado.php');

    class Ventas extends Empleado {

        // Atributos privados
        private $tipoContratacion = "";
        private $comisionVenta = 0;


        //Uso de métodos de acceso 
        // Método set
        public function asignarTipoContratacion($valor) {
            $this->tipoContratacion = $valor;
        }

        public function asignarComisionVenta($valor) {
            $this->comisionVenta = $valor;
        }

         // Método get
        public function verTipoContratacion() {
            return $this->tipoContratacion;
        }

        public function verComisionVenta() {
            return $this->comisionVenta;
        }

        // Método para calcular el sueldo líquido 
        public function calcularSueldoLiquido() {
            $this->igss = $this->verSueldoBase() * 4.83 / 100;
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->verComisionVenta();
            return $sueldoLiquido;
        }

        // Método para mostrar todos los datos 
        public function verDatos() {
            return parent::verDatos()
                . "<br><strong>Tipo Contratación: </strong>" . $this->verTipoContratacion()
                . "<br><strong>Comisión: </strong>" . $this->verComisionVenta();
        }
    }

?>
<strong></strong>