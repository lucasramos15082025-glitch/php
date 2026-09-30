<?php
	class Calculadora{
		public static $pi = 3.14159;


		public static function somar($a, $b){
			return $a + $b;
		}
	}

	echo 'valor de pi: ' . Calculadora::$pi . "\n";

	printf('soma: R$ %.2f', Calculadora::somar(9.90, 5.80));	

?>