
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nasc = $_POST['data_nasc'];


echo "<h2>dados recebidos </h2>";
echo "<p>nome:  $nome</p>";
echo "<p>email:  $email</p>";
echo "<p>senha:  $senha</p>";
echo "<p>confirmacao da senha:  $senha</p>";
echo "<p>data de nascimento:  $data_nasc</p>";