<?php

$codigo = $_GET['codigo'];

if ($codigo == 13) {
    echo "Missão 13: ache a picanha.";
}
else if ($codigo == 51) {
    echo "Missão 51: ache o Mundial do Palmeiras.";
}
else if ($codigo == 007) {
    echo "Missão 007: ache o agente secreto.";
}
else {
    echo "Missão não encontrada!";
}

?>

