<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula_11</title>
</head>

<body>
    <h2>Login</h2>
<form action="login.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" value="Entrar">
    </form>
    
    <?php
    $originalString = "123";
    $md5Hash = md5($originalString);

    if ($username == $checkHash) {
        echo "A verificação do hash foi bem-sucedida.\n";
    } else {
        echo "A verificação do hash falhou.\n";
    }

    ?>
</body>

</html>