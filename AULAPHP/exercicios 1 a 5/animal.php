<?php

class Animal {
    public function som() {
        return "Este animal faz um som.";
    }
}

class Cachorros extends Animal {
    public function som() {
        return "O cachorro late.";
    }
}

$meuCachorro = new Cachorros();
echo $meuCachorro->som(); // Saída: O cachorro late
?>hphp