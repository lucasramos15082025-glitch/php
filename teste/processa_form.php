<?php  

$nome= $_POST['nome'] ??'';
$email = $_POST['email'] ??'';


echo "<h2>dados recebidos:</h2>";
echo "<p> nome: $nome<p>";
echo "<p>email: $email<p>";

?>