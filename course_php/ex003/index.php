<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes em PHP</title>
</head>

<body>

    <main>
        <section class="container">
            <h1 class="title">Usando Constantes em PHP</h1>

            <?php
            const NOME = "Gilberto";            
            date_default_timezone_set('America/Sao_Paulo');
            $data = date("d/m/Y H:i:s");
            echo "<p class=\"paragraph\">Olá, " . NOME . " seja bem vindo!" . " ". $data . "</p>";
            ?>
        </section>
    </main>

</body>

</html>