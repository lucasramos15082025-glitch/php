<?php

class operacao{
    public function calcular(){
        $args = func_get_args();
        return array_sum($args);
    }
}

$op = new operacao();
echo $op->calcular(1, 2). PHP_EOL; // 3
echo $op->calcular(1, 2, 3); //6