<?php
    interface produtos{

    public function calcularPreco();

    public function exibirDetalhes();

    }

    class livros implements produtos{
        private $precoLivro;
        private $categoria;

        public function __construct($precoLivro, $categoria){
            $this->precoLivro = $precoLivro;
            $this->categoria = $categoria;

        }

        public function calcularPreco(){
            return "R$ 50.00";

        }
        public function exibirDetalhes(){
            return "categorias";

        }
    }
?>

 class quadrado implements forma{
        private $lado;

        public function __construct($lado){
            $this->lado = $lado;
        }

        public function calcularArea(){
            return $this->lado * $this->lado;
        }
    }