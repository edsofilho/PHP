<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula_03</title>
</head>
<body>
    <?php
    $idade = 16;
    if ($idade >= 18){
        echo "Maior de idade";
    }
    else {
        echo "Menor de idade";
    }

    ($idade >= 18)?"Maior de idade":"Menor de idade";

    ?>
    
</body>
</html>