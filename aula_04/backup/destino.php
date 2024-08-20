<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST["txt_nome"];
    $cidade = $_POST["txt_cidade"];
    $telefone = $_POST["txt_telefone"];
    $cpf = $_POST["txt_cpf"];
    ?>
    <h3>Resultado</h3>
    <b><?php echo $nome?></b> portador do cpf <b><?php echo $cpf ?></b> cujo telefone é <b><?php echo $telefone?></b> mora em <b><?php echo $cidade ?></b>
</body>
</html>