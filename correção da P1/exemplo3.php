<?php 

class produto {
    private $nome;
    

    public function __construct($nome){
        $this->nome = $nome;

    }

    public function getnome(){
        return $this->nome; // questao 17 return resposta correta 
    }
}

$caderno = new produto("caderno");
echo $caderno->getnome();

// echo $caderno->nome; error private 

// questao 18: esta correto pois chama  a funcao que getnome que esta publica o que não gera erro como na linha acima
