<?php
    abstract class animal{
        protected $nome;

        public function __construct($nome){
            $this->nome = $nome;
    }

    abstract public function som();

    }

    class cachorro extends animal{
        public function som(){
            return "latido";

        }

    }

    class passaro extends animal{
        public function som(){
            return"piar";

        }

    }

    $cachorro = new cachorro("rex");
    echo $cachorro->som();

    echo"\n ";

    $passaro = new passaro("tutu");
    echo $passaro->som()
?>