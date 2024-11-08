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
        $x = "Hello World!";
        // echo substr($x, 6,5);
        echo substr($x, 6);
        echo "<br>";
    ?>
    <?php 
        $x = "Hi, how \"are\" you?";
        echo substr($x, 5, -3);
        // echo substr($x, 5, 8);
    ?>
</body>
</html>