<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <main>

        <h1>Valor convertido</h1>

        <?php 
        
            $cotacaoDolar = 5.24;
            $valorEmReais = $_REQUEST["valor"] ?? 0;
            $valorEmDolar = $valorEmReais / $cotacaoDolar;

            /*
            Formatação de moeda com a função number_format, forma proficional de formatação de moeda, mas só funcioona num servidor real.            
            
            $padaoFormatacaoInternacional = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padaoFormatacaoInternacional, $valorEmReais, "BRL") . "Equivalem a " . numfmt_format_currency($padaoFormatacaoInternacional, $valorEmDolar, "USD"), "</p>"
            */

            echo "<p>Seus R\$" . number_format($valorEmReais, 2, ",", ".") . " equivalem à US\$" . number_format($valorEmDolar, 2, ",", ".") . "</p>";

        ?>

        <button><a href="../index.html">Voltar</a></button>

    </main>

</body>

</html>