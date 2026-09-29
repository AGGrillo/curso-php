<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
    <style>
        p > a {
            display: block;
            margin: auto;
            width: fit-content;
        }
    </style>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST); //$_GET $_POST $_COOKIES
            $nome = $_REQUEST["nome"] ?? "Sem nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "Sem sobrenome";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">&nbsp;&nbsp;Voltar para a página anterior&nbsp;&nbsp;</a>
        </p>
    </main>
</body>
</html>