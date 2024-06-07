<!DOCTYPE html>
<html>
<head>
    <title>Consulta de NIS</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="outer-container">
        <div class="container">
            <div class="container-space">
                <h2 class="text-title">Consulta de NIS</h2>
                <div class="form">
                    <form action="ProcessaConsulta.php" method="post">
                        <h1>Digite o NIS a ser consultado:</h1>
                        <input type="text" id="nis" name="nis" required class="input-margin input-name" placeholder="Digite o NIS">
                        <input type="submit" value="Consultar" class="input-margin">
                    </form>
                    <a href="../index.php" class="input-margin">Voltar à página inicial</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
