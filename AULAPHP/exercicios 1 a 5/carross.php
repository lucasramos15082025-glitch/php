<?php
class Carro {
    public $placa;
    public $num_chassi;

    function __construct($placa, $num_chassi) {
        $this->placa = $placa;
        $this->num_chassi = $num_chassi;
    }

    function acelerar($velocidade){
        echo "Velocidade: $velocidade km/h \n";
    }
}

