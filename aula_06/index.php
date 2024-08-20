<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>

<body style="background-color: #515151;">

    <?php
   // $fruta = array("Banana", "Kiwi", "Melão", "Melancia","Uva");
    //echo $fruta[0];
    //print_r($fruta);

/*
    for($i=0; $i<count($fruta); $i++){
        echo $fruta[$i];
        echo "</br>";
    }
*/

    // $fillArray = array_fill(0,5,"João");

    // print_r($fillArray);



    $nomes = array("João", "Maria", "Pedro", "Ana");

    $nomesString = implode(', ' , $nomes);

    echo $nomesString;
        ?>
</body>

</html>