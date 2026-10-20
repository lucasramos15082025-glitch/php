<?php

class Funcionario{
    public function trabalhar(){
        return "o funcionario esta trabalhando";
    }
}
class desenvolvedor extends Funcionario{
    public function trabalhar(){
        return "o desenvolvedor esta codificando";
    }
}

class designer extends Funcionario{
    public function trabalhar(){
        return "o designer esta criando designs";
    }
}

$funcionarios = [new desenvolvedor(), new designer()];
foreach ($funcionarios as $Funcionario);{
    echo $Funcionario->trabalhar(). PHP_EOL;
}



/*
$func = new Funcionario();
echo $func->trabalhar(). PHP_EOL;

*/

?>