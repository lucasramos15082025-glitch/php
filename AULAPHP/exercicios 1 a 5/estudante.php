<?php

	class pessoa{

	public $nome;
	public $idade;

	public function __construct($nome, $idade){
		$this->nome = $nome;
		$this->idade = $idade;
	}
	
	public function apresentacao(){
		return "Nome: $this->nome, Idade: $this->idade";
	}

}

	class estudante extends pessoa {
    public $curso;

    public function __construct($nome, $idade, $curso) {
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function apresentacao() {
        return parent::apresentacao() . ", Curso: $this->curso"; 

    }
}

$estudante1 = new estudante("lucas", "22", "ADS");
echo $estudante1->apresentacao();
