<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <section class="container">

        <h1 class="title">Tipos primitivos escalares em PHP!</h1>

        <div class="content">

            <?php

            // Em PHP, os tipos primitivos escalares são: int, float, (Real, até a 7.4), string e bool.
            // Em PHP, 0x=hexadecimal, 0=octal e 0b=binary.
            // Cosntantes são variáveis que não podem ser alteradas e são definidas com a função define() ou com a palavra reservada const.
            const NUMERO1 = 300;            
            echo "<p class=\"paragraph\">O valor da variável 1 é = <span class=\"value\">".NUMERO1."</span><br></p>";

            // Hexadecimal
            $numero2 = 0x1A;
            echo "<p class=\"paragraph\">O valor da variável 2 é = <span class=\"value\">$numero2</span><br></p>";

            // Binário
            $numero3 = 0b1101;
            echo "<p class=\"paragraph\">O valor da variável 3 é = <span class=\"value\">$numero3</span><br></p>";

            // Octal
            $numero4 = 0123;
            echo "<p class=\"paragraph\">O valor da variável 4 é = <span class=\"value\">$numero4</span><br></p>";

            // $variavel = 3.14;
            // var_dump() é uma função que retorna o tipo e o valor da variável.
            // var_dump($variavel);

            // $variavel = (int) "3.14"; // Type casting
            // var_dump($variavel);

            ?>

        </div>

    </section>

</body>

</html>