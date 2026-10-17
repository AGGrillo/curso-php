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
        $anoAtual = date("Y");
        $anoNasc = $_GET["nasc"] ?? 2000;
        $ano = $_GET["ano"] ?? $anoAtual;
    ?>
    <main>
        <h1 style="text-align: center; text-decoration: underline;">Calculando a Sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=($anoAtual - 1)?>" value="<?=$anoNasc?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" max="<?=$anoAtual?>" value="<?=$ano?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $idade = $ano - $anoNasc;
        ?>
        <h2 style="text-align: center; text-decoration: underline;">Resultado</h2>
        <p>Quem nasceu em <?=$anoNasc?> tem <strong><?=$idade?> anos</strong> em <?=$ano?>.</p>
    </section>
</body>
</html>