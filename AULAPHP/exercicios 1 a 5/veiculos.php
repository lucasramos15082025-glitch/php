<?php

class veiculo{

	public $marca;
	public $modelo;

	public function __construct($marca, $modelo){
		$this->marca = $marca;
		$this->modelo = $modelo;
	}

	public function detalhes(){
		return "marca: $this->marca, modelo: $this->modelo";
	}
} 

class Carro extends Veiculo {
    public $tipo;

    public function __construct($marca, $modelo, $tipo) {
        parent::__construct($marca, $modelo); // Chamando o construtor da classe pai
        $this->tipo = $tipo;
    }

    public function detalhes() {
        return parent::detalhes() . ", Tipo: $this->tipo"; // Sobrescrevendo método
    }
}

$meuCarro = new Carro("Toyota", "Corolla", "Sedan");
echo $meuCarro->detalhes();


?>