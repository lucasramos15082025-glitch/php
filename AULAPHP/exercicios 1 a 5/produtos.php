<?php
	class produto{
		public $nome;
		private $preco;

		public function __construc($nome, $preco){
			$this->nome = $nome;
			$this->preco = $preco;
		}

		public function __destruct(){
			echo"tchau! $this->nome! \n";
		}

	}

$arroz = new produto("arroz", 25.90);
$feijao = new produto("feijão", 6.89);