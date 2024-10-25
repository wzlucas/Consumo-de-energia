<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia {
    
    private $consumo;
    
    public function __construct($consumo) {
        $this->consumo = $consumo;
    }
    
    public function getValorFatura() {
        if ($this->consumo <= 100) {
            return $this->consumo * 1.45;

        } else {
            $excessoEnergia = $this->consumo - 100;
            return (100 * 1.45) + ($excessoEnergia * 1.60);
        }
    }
}