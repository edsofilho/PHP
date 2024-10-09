<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&display=swap" rel="stylesheet">

    <title>Cookie</title>
</head>

<body style="background-color: #303030;" class="text-light">
    <div class="fs-1 bold" id="div_1">GF Tech</div>
    <div id="div_2" class="bg-success w-100 d-flex flex-row">
        <form action="" method="post">
            <div>
            <img src="imgs/teclado.jpg">
            <input type="checkbox" name="produto" value="teclado">
            <label>Teclado</label>
            </div>

            <div>
            <img src="imgs/monitor.jpg">
            <input type="checkbox" name="produto" value="monitor">
                <label>Monitor</label>
            </div>

            <div>
            <img src="imgs/mouse.jpg">
            <input type="checkbox" name="produto" value="mouse">
                <label>Mouse</label>
            </div>

            <div>
            <img src="imgs/ssd.jpg">
            <input type="checkbox" name="produto" value="ssd">
            <label>SSD</label>
            </div>

            <div>
            <img src="imgs/fone.jpg">
            <input type="checkbox" name="produto" value="fone">
                <label>Fone</label>
            </div>

            <input type="submit" value="Enviar">
    </div>

    <?php
    // Define o nome e valor do cookie
    $cookie_name = "user";
    $cookie_value = "Edson";

    // Define o tempo de expiração do cookie para 5 segundos a partir de agora
    $cookie_expiration = 0;

    // Define o caminho onde o cookie está disponível
    $cookie_path = "/"; // O cookie estará disponível em todo o site
    
    // Cria o cookie
    setcookie($cookie_name, $cookie_value, $cookie_expiration, $cookie_path);

    // Verifica se o cookie foi definido
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '$cookie_name' já está definido com o valor: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie '$cookie_name' foi definido com sucesso. Recarregue a página para ver o valor.";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>