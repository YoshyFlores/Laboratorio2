<?php

abstract class Ave{
    public $nombre;

    abstract function setNombre($nombre);
    abstract function nadar();
    abstract function volar();

}

    class Pato extends Ave{
        public $nombreCientifico;

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function nadar()
        {
            return "Puede nadar.";
        }
        public function volar()
        {
            return "Puede volar.";
        }
        public function setNombreCientifico($nombreCientifico){
            $this->nombreCientifico = $nombreCientifico;
        }

        public function getNombreCientifico(){return $this->nombreCientifico;}
    }
    class Condor extends Ave{
        public $aniosVida;

        public function setNombre($nombre)
        {
            $this->nombre= $nombre;
        }
        public function nadar()
        {
            return "No puede nadar.";
        }
        public function volar()
        {
            return "Puede volar.";
        }
        public function setAniosVida($aniosVida){
            $this->aniosVida = $aniosVida;
        }

        public function getAniosVida(){return $this->aniosVida;}
    }

    



?>