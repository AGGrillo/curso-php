<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <?php
        //0x = hexadecimal, 0b = binário, 0 = octal
        $num = 0x1A;
        echo "O valor da variável é $num ";  

        $v = "Alex";
        var_dump($v);

        $n = 3e2;
        echo " O valor é $n ";
        var_dump($n);

        $número = (int) 5e4;
        var_dump($número);

        $numero = (float) "950";
        var_dump($numero);

        $casado = false;
        var_dump($casado);

        $vet = [3, 9.5, 6, 5];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>    
</body>
</html>