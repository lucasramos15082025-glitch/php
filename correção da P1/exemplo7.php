<?php

class calculadora{

     function media($n1, $n2){
        return ($n1 + $n2) / 2;
     }
}
$calculadora = new calculadora();
// precisa saber parametro e retorno
// mas não os detalhes internos (abstração)
echo $calculadora->media(6, 8); // 7

// questao 16 metodos magicos são metedos especiais automaticos __constructc e __destructc