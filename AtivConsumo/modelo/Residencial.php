<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia {
   
    private $consumo;
    
    public function __construct($consumo) {
        $this->consumo = $consumo;
    }
    
    public function getValorFatura() {
        return $this->consumo * 1.05;
    }

}