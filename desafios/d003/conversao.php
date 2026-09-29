<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <?php 
            // Cotação copiada do Google
            $cotação = 5.17;

            // Quanto R$ você tem?
            $real = $_REQUEST["din"] ?? 0;

            // Equivalência em dólar
            $dólar = $real / $cotação;

            // Mostrar o resultado
            //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a U\$" . number_format($dólar, 2, ",", ".") . ".";

            // Formatação de moedas com internacionalização!
            // Biblioteca intl (Internationallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong>.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x1F504; Voltar</button>
    </main>
</body>
</html>