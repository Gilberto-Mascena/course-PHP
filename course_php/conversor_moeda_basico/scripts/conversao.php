<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <main>

        <h1>Valor convertido</h1>

        <?php

        $cotacao = 5.30;

        $real = $_REQUEST["valor"] ?? 0; // Com $_REQUEST, o valor vem do formulário, mas também pode vir da URL

        $dolar = $real / $cotacao;

        echo "Seus R\$ " . number_format($real, 2, ",", ".") . " valem <strong>US\$ " . number_format($dolar, 2, ",", "</strong>");

        // Este padrão de formatação comentado abaixo é mais elegante, mas só funciona em servidores reais, não em localhost
        /* $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " valem " . numfmt_format_currency($padrao, $dolar, "USD") . "."; */

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>

</body>

</html>