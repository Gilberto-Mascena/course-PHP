<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <main>

        <h1 class="title">
            Resultado Final
        </h1>

        <?php
        $numero = $_GET['numero'];
        $numeroAntecessor = $numero - 1;
        $numeroSucessor = $numero + 1;


        echo "<p>O número escolhido foi: <strong>$numero</strong></p>";
        echo "<p>O seu <i>Antecessor</i> é: $numeroAntecessor</p>";
        echo "<p>O seu <i>Sucessor</i> é: $numeroSucessor</p>";
        ?>

        <p><a href="../index.html">Voltar</a></p>

    </main>


</body>

</html>