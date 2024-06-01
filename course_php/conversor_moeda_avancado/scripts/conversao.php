<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>    
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <main>

        <h1>Valor convertido</h1>

        <?php

        $inicio = date("m-d-Y", strtotime("-1 week"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27' . $inicio . '%27&@dataFinalCotacao=%27' . $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

       // echo "A cotação foi $cotacao";

        $real = $_REQUEST["valor"] ?? 0; // Com $_REQUEST, o valor vem do formulário, mas também pode vir da URL

        $dolar = $real / $cotacao;

        echo "Seus R\$ " . number_format($real, 2, ",", ".") . " valem <strong>US\$ " . number_format($dolar, 2, ",", ","."</strong>");

        // Este padrão de formatação comentado abaixo é mais elegante, mas só funciona em servidores reais, não em localhost
        /* $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " valem " . numfmt_format_currency($padrao, $dolar, "USD") . "."; */

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>

</body>

</html>