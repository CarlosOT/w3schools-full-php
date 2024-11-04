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
        $comParentesis = "com parentesis";
        $semParentesis = "sem parentesis";
        echo "Olá $semParentesis <br>";
        echo ("Olá $comParentesis <br>");
    ?>
    <?php 
        $comParentesis = "com parentesis";
        $semParentesis = "sem parentesis";
        echo 'Olá ' . $semParentesis . '<br>';
        echo ('Olá ' . $comParentesis . '<br>');        
    ?>
</body>
</html>