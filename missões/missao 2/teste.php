
<?php

$codigosValidos = ["1001", "1002", "1003"];

$horario = date("d/m/Y H:i:s");
$metodo = $_SERVER["REQUEST_METHOD"];
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$parametros = array_unique(array_merge(
    array_keys($_GET),
    array_keys($_POST)
));

$camposProibidos = ["senha", "password", "token", "authorization"];

$parametros = array_filter($parametros, function ($nome) use ($camposProibidos) {
    return !in_array(strtolower($nome), $camposProibidos);
});

$registro = [
    "horario" => $horario,
    "metodo" => $metodo,
    "uri" => $uri,
    "parametros" => array_values($parametros)
];

$arquivo = "logs.txt";

file_put_contents(
    $arquivo,
    json_encode($registro, JSON_UNESCAPED_UNICODE) . PHP_EOL,
    FILE_APPEND | LOCK_EX
);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["codigo"])) {

    $codigo = trim($_GET["codigo"]);

    if ($codigo == "") {
        echo "Erro: informe um código.";
    } elseif (!in_array($codigo, $codigosValidos)) {
        echo "Erro: código inexistente.";
    } else {
        echo "Consulta realizada com sucesso! Código: "
            . htmlspecialchars($codigo, ENT_QUOTES, "UTF-8");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigo = trim($_POST["codigo"] ?? "");
    $relatorio = trim($_POST["relatorio"] ?? "");

    if ($codigo == "" || $relatorio == "") {
        echo "Erro: preencha todos os campos.";
    } elseif (!in_array($codigo, $codigosValidos)) {
        echo "Erro: código inexistente.";
    } else {
        echo "Relatório recebido com sucesso!<br>";

        echo htmlspecialchars($relatorio, ENT_QUOTES, "UTF-8");
    }
}

?>

<h2>Consultar código</h2>

<form method="GET">
    <input type="text" name="codigo" placeholder="Digite o código">
    <button type="submit">Consultar</button>
</form>

<h2>Enviar relatório</h2>

<form method="POST">
    <input type="text" name="codigo" placeholder="Digite o código">

    <textarea name="relatorio" placeholder="Digite o relatório"></textarea>

    <button type="submit">Enviar relatório</button>
</form>

<h2>Registros de acesso</h2>

<?php

if (file_exists($arquivo)) {

    $logs = file($arquivo, FILE_IGNORE_NEW_LINES);

    foreach ($logs as $log) {

        echo htmlspecialchars($log, ENT_QUOTES, "UTF-8") . "<br>";
    }
}

?>
