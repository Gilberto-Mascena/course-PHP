<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções matemáticas em PHP!</title>
</head>
<body>

    <?php
        // 1 Função abs() - Retorna o valor absoluto de um número
        $num = -10;
        echo "O valor absoluto de $num é: " . abs($num) . "<br>";

        // 2 Função base_convert() - Converte um número de uma base para outra
        base_convert(10, 10, 8); // 10 em decimal para octal
        echo "10 em decimal para octal: " . base_convert(10, 10, 8) . "<br>";
        echo "10 em decimal para binário: " . base_convert(10, 10, 2) . "<br>";
        echo "10 em decimal para hexadecimal: " . base_convert(10, 10, 16) . "<br>";

        // 3 Função ceil() - Arredonda um número para cima
        $num1 = ceil(5.1);
        echo "5.1 arredondado para cima é: $num1 <br>";

        M_PI; // Valor de PI
        echo "O valor de PI é: " . M_PI . "<br>";

        pi(); // Valor de PI
        printf("O valor de PI é: %.2f <br>", pi());

        // 4 Função floor() - Arredonda um número para baixo
        // 5 Função round() - Arredonda um número
        // 6 Função rand() - Gera um número aleatório
        // 7 Função max() - Retorna o maior valor de um array
        // 8 Função min() - Retorna o menor valor de um array

        // 9 Função pow() - Retorna a potência de um número
        $num2 = pow(2, 3);
        echo "2 elevado a 3 é: $num1 <br>";

        // 10 Função sqrt() - Retorna a raiz quadrada de um número
        // 11 Função dechex() - Converte um número decimal para hexadecimal
        // 12 Função decoct() - Converte um número decimal para octal

        // 13 Função intval() - Converte uma string para um número inteiro
        $num3 = intdiv(5, 2);
        echo "O resultado da divisão inteira de 2 por 5 é: $num1 <br>";
    ?>
    
</body>
</html>