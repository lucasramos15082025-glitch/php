
<?php

class Veiculo {
    public function mover() {
        return "o veiculo esta se movendo";
    }
}

class Carro extends Veiculo {
    public function mover() {
        return "o carro esta se movendo na estrada";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        return "a bicicleta esta se movendo na ciclovia";
    }
}

$veiculos = [new Carro(), new Bicicleta()];
foreach ($veiculos as $veiculo) {
    echo $veiculo->mover() . PHP_EOL;
}

?>
