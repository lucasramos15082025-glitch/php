
<?php

class Documento {
    public function exibirConteudo() {
        return "Exibindo documento";
    }
}

class PDF extends Documento {
    public function exibirConteudo() {
        return "Exibindo documento em PDF";
    }
}

class Word extends Documento {
    public function exibirConteudo() {
        return "Exibindo documento em Word";
    }
}

$documentos = [new PDF(), new Word()];
foreach ($documentos as $documento) {
    echo $documento->exibirConteudo() . PHP_EOL;
}

?>
