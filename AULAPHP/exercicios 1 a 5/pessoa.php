<?php
	class pessoa{
		public $nome; 	 //pode ser acessado dentro e fora da classe
		private $idade;  //pode ser acessado apenas e fora da classe
		protected $cpf; //pode ser acessado dentro da classe e por classes filhas


		public function getIdade(){
			return $this->idade . "\n";
		}

		public function setIdade($idade){
			$this->idade = $idade;
		}
		public function getCpf(){
			return $this->cpf . "\n";
		}
		public function setcpf($cpf){
			$this->cpf = $cpf;
		}

	}
	
	$pessoa_01 = new pessoa();
	$pessoa_01->nome = "Evandro";
	echo $pessoa_01->nome . "\n";
	
	$pessoa_01->setIdade(42);
	echo $pessoa_01->getIdade();
	$pessoa_01->setCpf(123456789);
	echo $pessoa_01->getCpf();