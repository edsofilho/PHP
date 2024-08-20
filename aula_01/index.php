<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP - Aula 01</title>
</head>

<body>
    <?php
    $nome = "Edson";
    $cidade = "Cajati";
    echo "<h3>O aluno $nome mora em $cidade</h3>";

    echo "<table border='1' widht='200' class='table table-striped-columns'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td>$nome</td>
                    <td>$cidade</td>
                </tr>
            </tbody>
    </table>";
    ?>

    <table class='table table-striped-columns'>
        <thead>
            <tr>
            <th>Nome</th>
            <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome ?></td>
                <td><?php echo $cidade ?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>