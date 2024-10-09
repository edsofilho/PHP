<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Envia para destino</h1>
    <form action="index1.php" method="post">
        <label>Nome</label>
        <input type="text" name="txt_nome">
        <label>Cidade</label>
        <input type="text" name="txt_cidade">
        <label>Telefone</label>
        <input type="text" name="txt_telefone">
        <label>CPF</label>
        <input type="text" name="txt_cpf">
        <input type="submit">
    </form>

    <?php
    if(empty($_POST["txt_nome"]) or empty($_POST["txt_cidade"]) or empty($_POST["txt_telefone"]) or empty($_POST["txt_cpf"])){
    ?>

    <h3>Digite:</h3>

    <?php
    } else{
        $nome = $_POST["txt_nome"];
        $cidade = $_POST["txt_cidade"];
        $telefone = $_POST["txt_telefone"];
        $cpf = $_POST["txt_cpf"];
    }
    ?>
    <hr>
    <h3>Resultado</h3>
    <b><?php echo $nome?></b> portador do cpf <b><?php echo $cpf ?></b> cujo telefone é <b><?php echo $telefone?></b> mora em <b><?php echo $cidade ?></b>
</body>
</html>