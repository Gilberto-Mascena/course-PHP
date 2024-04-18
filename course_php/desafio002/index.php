<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Gerado</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <main>

        <h1>Gerando números aleatórios</h1>


        <?php

            $minimo = 0;
            $maximo = 100;
            $numeroAleatorio = mt_rand($minimo, $maximo);          

            echo "<p>Gerando um número aleatório entre $minimo e $maximo...<br>
            O número gerado foi: <strong>$numeroAleatorio<?strong></p>";                       

        ?>

        <button onclick="javaScript:document.location.reload()">&#x1F504; Gerar outro</button>


    </main>

</body>

</html>