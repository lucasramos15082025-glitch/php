<?php
    interface forma{
        public function calcularArea();
    }

    class quadrado implements forma{
        private $lado;

        public function __construct($lado){
            $this->lado = $lado;
        }

        public function calcularArea(){
            return $this->lado * $this->lado;
        }
    }

    class circulo implements forma{
        private $raio;

        public function __construct($raio){
            $this->raio = $raio;
        }

        public function calcularArea(){
            return pi() * $this->raio * $this->raio;
        }
    }


    $quadrado = new quadrado(4);
    echo $quadrado->calcularArea();

    echo"\n";

    $circulo = new circulo(3);
    echo $circulo->calcularArea();
?>