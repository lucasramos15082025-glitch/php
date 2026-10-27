<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Formulario de Registro de Usuario</title>
</head>
<body>
    <h1>Formulario de Registro de Usuario</h1>
    <form action="processa_form.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="senha">Senha:</label>
        <input  type="password" name="senha" minlength="6" id="senha" required><br>

        <label for="senha">Confirme sua Senha:</label>
        <input type="password" name="senha" minlength="6" id="senha" required><br>

        <label for="data_nasc">Data de nascimento:</label>
        <input type="date" name="data_nasc" id="data_nasc" max="2026-10-26" required><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>


