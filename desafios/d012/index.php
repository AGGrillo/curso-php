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
        $totalSegundos = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1 style="text-align: center; text-decoration: underline;">Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$totalSegundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>    
    <?php 
        $sobra = $totalSegundos;
        $semana = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;
        $dia = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;
        $hora = (int) ($sobra / 3_600);
        $sobra = $sobra % 3_600;
        $minuto = (int) ($sobra / 60);
        $sobra = $sobra % 60;
        $segundo = $sobra;
    ?>
    <section>
        <h2 style="text-align: center; text-decoration: underline;">Totalizando tudo:</h2>
        <p>Analisando o total de segundos que você digitou, <strong><?=number_format($totalSegundos, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semana(s);</li>
            <li><?=$dia?> dia(s);</li>
            <li><?=$hora?> hora(s);</li>
            <li><?=$minuto?> minuto(s);</li>
            <li><?=$segundo?> segundo(s).</li>
        </ul>
    </section>
</body>
</html>