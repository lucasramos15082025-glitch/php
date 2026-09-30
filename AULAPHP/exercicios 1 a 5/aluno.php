<?php

class Aluno {
    private $nome;
    private $ra;
    private $cpf;
    private $dt_nasc;
    private static $totalAlunos;

    function __construct($nome, $ra){
        $this->nome = $nome;
        $this->ra = $ra;
        $this->matricular();
    }

    private function matricular(){
        printf("Aluno %s matriculado\n", $this->nome);
        Aluno::$totalAlunos += 1;
    }

    // metodo estatico que retorna o total de alunos (atributo es
    public static function Total_de_alunos(){
        return Aluno::$totalAlunos;
    }

    function __destruct(){
        echo "matricula $this->ra atualizada!\n";
    }
}

$aluno1 = new Aluno("Bob", 20260830);
printf("Matriculados %d\n", Aluno::Total_de_alunos());

$aluno2 = new Aluno("Giovana", 20260831);
printf("Matriculados %d\n", Aluno::Total_de_alunos());

?>