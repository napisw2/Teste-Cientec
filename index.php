<!DOCTYPE html>
<html>
<head>
    <title>Sistema NIS Cientec</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="outer-container">
        <div class="container">
            <div class="container-space">
                <h2 class="text-title">Sistema NIS Cientec</h2>
                <form action="pages/LoginHandler.php" method="post" class="form">
                    <h1>Digite o seu nome para cadastrar:</h1>
                    <input type="text" id="name" name="name" required class="input-margin input-name" placeholder="Digite o seu nome Completo">
                    <input type="submit" value="Enviar" class="input-margin">
                </form>
                <div>
                    <a href="pages/ConsultaNIS.php">Clique aqui para consultar seu NIS</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>