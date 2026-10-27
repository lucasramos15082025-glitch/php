<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Formulário de Registro de Usuário</title>
</head>
<body>
    <h1>Formulário de Registro de Usuário</h1>
    <form action="processa_form.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name=email" id="email" required><br>

        <label for="senha">Senha:</label>
        <input type="int" name="senha" id="senha" required><br>

        <label for="senha">Confirme sua Senha:</label>
        <input type="int" name="senha" id="senha" required><br>

        <label for="data_nasc">Data de nascimento:</label>
        <input type="date" name=data_nasc" id="data_nasc" required><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>


<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nasc = $_POST['data_nasc'];



echo "<p>nome:  $nome</p>";
echo "<p>email:  $email</p>";
echo "<p>senha:  $senha</p>";
echo "<p>confirmação da senha:  $senha</p>";
echo "<p>data de nascimento:  $data_nasc</p>";

?>