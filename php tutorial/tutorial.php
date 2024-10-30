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
        $txt = "PHP";
        $versao = phpversion();
        echo "<p>&bull; escrevendo em $txt na versão $versao</p>";
    ?>
    <?php 
        $color = "verde";
        echo "&bull; meu carro é " . $color . "<br>";
        echo "&bull; minha casa é " . $COLOR . "<br>";
        echo "&bull; meu barco é " . $coLOR . "<br>";
        //comment sing-line
        /*comment multi-line*/
        #comment sing-line
    ?>
    <?php 
        $soma = 5 /*+ 15*/ + 5;
        echo "<p>&bull; valor da soma é $soma</p>";
    ?>
</body>
</html>