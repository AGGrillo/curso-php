<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        // Área de declarações:
        $número = $_GET["num"] ?? 1;
    ?>
    <main>
        <h1 style="text-align: center; text-decoration: underline;">Informe um número:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" value="<?=$número?>">
            <input type="submit" value="Calcular Raízes">
        </form>    
    </main>
    <section>
        <h2 style="text-align: center; text-decoration: underline;">Resultado Final:</h2>
        <?php
            $rq = sqrt($número);
            $rc = $número ** (1/3);
            echo "<p>Analisando o número <strong>$número</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($rq, 3, ",", ".") . "</strong>.</li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format($rc, 3, ",", ".") . "</strong>.</li></ul>";
        ?>
    </section>
</body>
</html>