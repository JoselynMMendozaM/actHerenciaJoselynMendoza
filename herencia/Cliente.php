<?php
    include_once('Persona.php');
    class Cliente extends Persona{
        private $nit = 0;

    //Uso de métodos de acceso 
    // Método set
    public function asignarNit($valor) {
        $this->nit = $valor;
    }
    
    // Método get
    public function verNit() {
        return $this->nit;
    }
        public function verDatos(){
            return "<br><strong>Nit: </strong> ". $this->verNit()
                ."<br> ". parent::verDatos();
        }
    }
?>