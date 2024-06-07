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
    $nis = $_POST['nis'];

    $usuario = new UserController();
    $user = $usuario->findByNIS($nis);
    echo '<div class="outer-container">
            <div class="container">
                <div class="container-space">';
    if ($user) {
        echo "<p>O nome do usuário com NIS $nis é : {$user->getName()}</p>";
        echo "<a href='../index.php'>Voltar ao início</a>";
    } else {
        echo "<p>Cidadão não encontrado</p>";
        echo "<a href='../index.php'>Voltar ao início</a>";
    }
    echo '</div></div></div>';
} else {
    echo '<div class="outer-container">
            <div class="container">
                <div class="container-space">
                    <p>Método de solicitação inválido.</p>
                    <a href="../index.php">Voltar ao início</a>
                </div>
            </div>
          </div>';
}

echo '</body>
</html>';
?>
