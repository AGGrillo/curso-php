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
        $preco = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
        <h1 style="text-align: center; text-decoration: underline;">Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reaj">Qual é o percentual de reajuste? (<strong><span id="porc">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value="<?=$reaj?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>   
    <?php 
        $aumento = $preco * $reaj / 100;
        $novoPreco = $preco + $aumento;
    ?> 
    <section>
        <h2 style="text-align: center; text-decoration: underline;">Resultado</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$reaj?>% de aumento</strong>, vai passar a custar <strong>R$<?=number_format($novoPreco, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor()        
        function mudaValor() {
            porc.innerText = reaj.value
        }
    </script>
</body>
</html>