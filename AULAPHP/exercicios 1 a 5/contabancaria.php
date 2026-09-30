<?php
	class conta{
		public $saldo;
	
		function depositar($valor){
			$this->saldo = $this->saldo + $valor;
		}

		function sacar($saque){
			if ($this->saldo >= $saque){
				$this->saldo = $this->saldo - $saque;
			}else{
				echo"operação falhou\n";
			}
		}

		function saldo(){
			echo"saldo: $this->saldo\n";
		}

	}

	$contaUm = new conta();
	$contaUm->saldo = 100.00;
	$contaUm->depositar(100.00);
	$contaUm->saldo(); // Corrigido de consultar() para saldo()
	$contaUm->sacar(5000);
	$contaUm->saldo();

?>