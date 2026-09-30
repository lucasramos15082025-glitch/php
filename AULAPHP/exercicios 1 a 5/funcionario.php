<?php
	class Funcionario{
		public $nome;
		public $rg;
		public $cpf;
		public $data_nasci;
		public $cargo;
		public $salario;
		
		function __construct($nome){
			$this->nome = $nome;
		}

		function promocao($taxa){
			echo "funcionario: $this->nome\n";
			echo "salario anterior: $this->salario\n";
			$this->salario = $this->salario + ($this->salario * $taxa);
			echo "salario novo: $this->salario\n\n";

		}
	}
	$funcionario_01 = new Funcionario("silva santos");
	$funcionario_01->salario = 1000.00;
	$funcionario_01->promocao(0.10);

?>