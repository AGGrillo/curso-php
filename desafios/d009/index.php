<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["v1"] ?? '';
        $peso1 = $_GET["p1"] ?? '';
        $valor2 = $_GET["v2"] ?? '';
        $peso2 = $_GET["p2"] ?? '';
    ?>
    <main>
        <h1 style="text-align: center; text-decoration: underline;">Média Aritmética e Média Ponderada</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º valor:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" required>
            <label for="p1">1º peso:</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>" min="1" required>
            <label for="v2">2º valor:</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" required>
            <label for="p2">2º peso:</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>" min="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2 style="text-align: center; text-decoration: underline;">Cálculo das Médias</h2>
        <p>Analisando os valores fornecidos e seus respectivos pesos, temos:</p>
        <?php
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            echo "<ul><li>A média aritmética entre <strong>$valor1</strong> e <strong>$valor2</strong> é igual a <strong>" . number_format($ma, 2, ",", ".") . "</strong>.</li>";
            echo "<li>A média ponderada entre <strong>$valor1</strong> com <strong>peso $peso1</strong> e <strong>$valor2</strong> com <strong>peso $peso2</strong> é igual a <strong>" . number_format($mp, 2, ",", ".") . "</strong>.</li></ul>";
        ?>    
    </section>    
</body>
</html>