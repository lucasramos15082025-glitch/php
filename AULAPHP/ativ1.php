<?php
    abstract class funcionarios{
        public $name;

        public function __construct($name){
            $this->name = $name;

    }
    abstract public function calcularSalario();

    }

    class gerente extends funcionarios{
        public function calcularSalario(){
            return "R$ 15.000";

        }
    }

    class assistente extends funcionarios{
        public function calcularSalario(){
            return "R$ 6.000";
        }
    }

    $gerente = new gerente("andre");
    echo $gerente->calcularSalario();

    echo"\n";


    $assistente = new assistente("pedro");

    echo $assistente->calcularSalario();

?>