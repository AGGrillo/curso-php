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
        $salMínimo = 1_621.00;
        $sal = $_GET["sal"] ?? $salMínimo;
    ?>
    <main>
        <h1 style="text-align: center; text-decoration: underline;">Informe o seu salário:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" value="<?=$sal?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$ <?=number_format($salMínimo, 2, ",", ".")?></strong>...</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2 style="text-align: center; text-decoration: underline;">Resultado Final</h2>
        <?php 
            $total = intdiv($sal, $salMínimo);
            $diferença = $sal % $salMínimo;
            echo "<p>Quem recebe um salário de R$ " . number_format($sal, 2, ",", ".") . ", ganha <strong>$total salário(s) mínimo(s)</strong> mais R\$ " . number_format($diferença, 2, ",", ".") . ".</p>";
        ?>
    </section>
</body>
</html>