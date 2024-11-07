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
        define("GREETING", "Oláaa, seja bem vindo(a)"); //estou definindo uma CONSTANTE
        echo GREETING;
        echo "<br>";
    ?>
    <?php 
        $n1 = 1;
        const MYCAR = "Gol"; //não pode ser declaro dentro da função
        define("MYCAR2", "Gol");
        if($n1 == 1){
            // define("MYCAR2", "Gol"); PODE
            // const MYCAR = "Gol"; NÃO PODE
            echo MYCAR2;
        }
        echo "<br>";
    ?>
    <?php 
        define("cars", ["alfa romeo", "BMW", "toyota"]);
        echo cars[0];
    ?>
    <?php 
        define('TESTE', 'testando constante');
        function myTest(){
            echo TESTE;
        }
        echo "<br>";
        myTest();
    ?>
</body>
</html>