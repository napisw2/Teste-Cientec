<?php
include_once '../database/Database.php';
include_once '../controllers/UserController.php';

echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $user = new UserController();
    $retorno = $user->insert($name);

    echo '<div class="outer-container">
            <div class="container">
                <div class="container-space">';
    if ($retorno["inserted"]) {
        echo '<h1>Seu NIS foi criado com sucesso: ' . $retorno["nis"] . '</h1><br>';
        echo '<a href="../index.php" class="input-margin">Voltar à página inicial</a>';
    } else {
        echo '<h1>Erro ao criar o NIS.</h1>';
        echo '<a href="../index.php" class="input-margin">Voltar à página inicial</a>';
    }
    echo '</div></div></div>';
} else {
    echo '<div class="outer-container">
            <div class="container">
                <div class="container-space">
                    <h1>Método de solicitação inválido.</h1>
                    <a href="../index.php" class="input-margin">Voltar à página inicial</a>
                </div>
            </div>
          </div>';
}

echo '</body>
</html>';
?>
