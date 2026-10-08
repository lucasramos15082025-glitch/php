<?php 

class aluno {
    public $nome;
    

    public function apresentar(){
        return "nome: this->nome";

    }
}

$pedro = new aluno();
$pedro->nome = 'pedro';
echo $pedro->apresentar();
