<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Nowdoc em PHP!</title>
</head>
<body>

    <?php 
    
    $curso = "PHP";
    $ano = date("Y");   

    // Nowdoc é uma forma de criar strings que não permite a interpolação(interpretação) de variáveis em multiplas linhas.
    echo <<<'FRASE'

        Estou estudando <br>
                    $curso em $ano

    FRASE;
    
    ?>
    
</body>
</html>