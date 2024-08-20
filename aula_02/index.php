<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 02</title>
</head>
<body>
    <?php
        $num1 = 10;
        $num2 = 3;

        // adição
        echo $num1 + $num2 . "<br>";

        //subtração
        echo $num1 - $num2 . "<br>";

        //multiplicação
        echo $num1 * $num2 . "<br>";

        //divisão
        echo $num1 / $num2 . "<br>";

        //Resto da divisão
        echo $num1 % $num2 . "<br>";

        // Potenciação
        echo $num1 ** $num2 . "<br>";

        //Radiciação
        echo sqrt($num1) . "<br>";

        //Arredonamento
        echo round(sqrt($num1), 1, PHP_ROUND_HALF_UP) . "<br>";
        ?>
</body>
</html>