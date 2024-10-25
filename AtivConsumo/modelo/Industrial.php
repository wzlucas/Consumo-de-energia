<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia{
   
    private $consumo;
    
    public function __construct($consumo) {
        $this->consumo = $consumo;
    }
    
    public function getValorFatura() {
        if ($this->consumo <= 500) {
            return $this->consumo * 1.80;
        
        } else {
            $excessoEnergia = $this->consumo - 500;
            return (500 * 1.80) + ($excessoEnergia * 2.30);
        }
    }

}