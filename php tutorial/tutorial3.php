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
        $xGlobal = 5; //global scope
        function myTest(){
            $xLocal = 8;
            // usar a variável xGlobal dentro desta função gerará erro
            // echo "<p> Variable x inside function is: $xGlobal</p>";

            // a variável local é esta que está dentro da função
            echo "<p> Variable x inside function is: $xLocal</p>";

            // posso acessar a variável de fora da função usando a keyword "global"
            global $xGlobal;
            echo "<p>Estou acessando a variável que está fora da função: $xGlobal</p>";
            
        }

        myTest();
        echo "<p>Variable x outside function is: $xGlobal</p>";
        echo "<p>Variable x inside function is: $xLocal</p>";
    ?>

    <?php 
        $x = 5;
        $y = 10;

        function somar(){
            global $x, $y;
            $y = $x + $y;
            echo $y;
        }

        somar();
        // echo $y;
    ?>
</body>
</html>