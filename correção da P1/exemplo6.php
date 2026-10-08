<?php
    class Alunos{
        public $nome;

        public $idade;

        public $sexo;

        public function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }
    }
    $aluno01 = new Alunos("joão Silva", 20, "M");

    // aula 3 slide 4

    // questão 13 resposta A) a capacidade de ocultar a implementação dos detalhes de um metodo