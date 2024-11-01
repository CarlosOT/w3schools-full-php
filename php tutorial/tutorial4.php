<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP Page</h1>
    <?php 
        $x = 5; //variável global
        $y = 10; //variável global

        function myTest(){
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest();
        // echo $y;
    ?>
    <?php 
        $n1 = 10;
        $n2 = 20;
        // $idade = 28;
        $soma;

        function nomeIdade(){
            //usando array GLOBALS
            // global $nome, $idade, $sobrenome;
            $GLOBALS["soma"] = $GLOBALS["n1"] + $GLOBALS["n2"];
        }

        nomeIdade();
        echo $soma;
        
    ?>
</body>
</html>