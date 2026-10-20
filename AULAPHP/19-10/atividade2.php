<?php

class veiculo{
    public function mover(){
        return "o veiculo esta em movimento";
    }
}

class carro extends veiculo{
    public function mover(){
        return "carro se move na estrada";
    }
}

class bicicleta extends veiculo{
    public function mover(){
        return "bicicleta se move na ciclo faixa";
    }
}

$veiculos = [new carro(), new bicicleta()];
foreach ($veiculos as $veiculo);{
    echo $veiculo->mover(). PHP_EOL;
}


