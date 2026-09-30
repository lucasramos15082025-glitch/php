<?php
	class funcionario{
	public function cargo(){
		return "o funcionário trabalha como generalista.";
	}
}

	class gerente extends funcionario{
		public function cargo(){
			return "o gerente supervisiona a equipe.";
	}
}

$gerente = new gerente();
echo $gerente->cargo(); // saída: o gerente supervisona a equipe


?>