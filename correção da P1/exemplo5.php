<?php 

class pessoa {
    private $nome;
    

    public function __construct($nome){
        $this->nome = $nome;
        echo "nome: $this->nome \n";

    }

    public function __destruct(){
        echo "destruido";
    }
}

$vinicius = new pessoa("Vinicius");
unset($vinicius); // chama o destruidor


