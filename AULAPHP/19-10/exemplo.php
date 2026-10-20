<?php

class Matematica{
        public function somar(...$numeros){
            return array_sum($numeros);
        }
}

$calculo = new Matematica();
echo $calculo->somar(1,2). PHP_EOL; // 3
echo $calculo->somar(1,2, 3, 4). PHP_EOL; // 10