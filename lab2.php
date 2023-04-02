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

        class Gallina extends Ave{
        public $especies;
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
            return "No puede volar.";
        }
        public function setEspecies($especies){
            $this->especies = $especies;
        }

        public function getEspecies(){return $this->especies;}
    }

    class Pinguino extends Ave{
        public $temperaturaC;
        public function setNombre($nombre)
        {
            $this->nombre= $nombre;
        }
        public function nadar()
        {
            return "Puede nadar.";
        }
        public function volar()
        {
            return "No puede volar.";
        }
        public function setTemperaturaC($temperaturaC){
            $this->temperaturaC = $temperaturaC;
        }

        public function getTemperaturaC(){return $this->temperaturaC;}
        
    }



?>