<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP Page</h1>
    <p>
        <?php
            $nome = "Carlos ";
            $sobrenome = "Teixeira";
            echo "Olá, meu nome é $nome";
            echo "Eu posso concatenar meu nome e sobrenome " . $nome . $sobrenome;
        ?>
    </p>
    <p>
        <?php
            $y = 5;
            $x = 6;
            $soma = $y + $x;
            //echo "Eu posso somar $y mais $x que dá o resultado: " . ($y + $x);
            echo "Eu posso somar $y mais $x que dá o resultado: $soma";
        ?>
    </p>
    <p>
        Testanto var_dump ...
        <?php 
            $vetor = [3,4,5,6,"ronaldo"];
            var_dump($vetor);
        ?>
    </p>
    <p>
        declarando variáveis com mesmo valor na mesma linha: 
        <?php 
            $x = $t = $z = "Olá, ";
            echo $x . $t . $z;
        ?>
    </p>
</body>
</html>