<?php

class Calculadora {

    public function calcular($operacao, $a, $b, $c = 0) {

        if ($operacao == "+") {
            $resultado = $a + $b + $c;
        } else {
            if ($operacao == "-") {
                $resultado = $a - $b - $c;
            } else {
                if ($operacao == "*") {
                    $resultado = $a * $b * $c;
                } else {
                    if ($operacao == "/") {
                        $resultado = $a / $b / $c;
                    }
                }
            }
        }

        return $resultado;
    }
}

$calc = new Calculadora();

$a = readline("Numero 1: ");
$b = readline("Numero 2: ");
$c = readline("Numero 3: ");

echo "Soma: " . $calc->calcular("+", $a, $b, $c) . PHP_EOL;
echo "Subtracao: " . $calc->calcular("-", $a, $b, $c) . PHP_EOL;
echo "Multiplicacao: " . $calc->calcular("*", $a, $b, $c) . PHP_EOL;
echo "Divisao: " . $calc->calcular("/", $a, $b, $c) . PHP_EOL;

?>