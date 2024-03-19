<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strng Heredoc em PHP!</title>
</head>
<body>
    
    <?php 
    
    $curso = "PHP";
    $ano = date("Y");   

    // Heredoc é uma forma de criar strings que permite a interpolação de variáveis em multiplas linhas.
    echo <<< FRASE

        Estou estudando <br>
                    $curso em $ano

    FRASE;
    
    ?>

</body>
</html>