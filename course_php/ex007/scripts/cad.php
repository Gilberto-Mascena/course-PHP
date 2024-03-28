<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <header>

        <h1 class="title">
            Resultado do porcessamento
        </h1>
    
    </header>

    <main>

        <?php

            $nome = $_GET["name"] ?? "Nome não informado"; // duas interrogações para verificar se a variável foi definida, "Qualicência nula. a partir do PHP 7.0"
            $last_name = $_GET["last_name"] ?? "Sobrenome não informado";           
            echo "<p>Seja bem vindo <strong>$nome $last_name</strong>! este é o meu site. </p>";
            
        ?>

        <P><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></P>

    </main>
    
</body>
</html>