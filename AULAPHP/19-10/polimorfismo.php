<?php

function somar($a, $b, $c = 0){ // para ser polimorfismo basta adicioanar um valor null ou 0 a variavel escolhida
    $soma = $a + $b + $c;
    return $soma;
}

$n1 = readline("numero 1:");
$n2 = readline("numero 2:");
$n3 = readline("numero 3:");
echo "(2)soma: " . somar($n1, $n2). PHP_EOL; //30
echo "(3)soma: " . somar($n1, $n2, $n3). PHP_EOL; //60