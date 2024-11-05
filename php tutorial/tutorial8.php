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
        $n1 = 456;
        $n2 = 5.7;
        $nome = "carlos";

        var_dump(is_int($n1));
        var_dump(is_integer($n1));
        var_dump(is_long($n1));

        var_dump(is_float($n2));
        var_dump(is_integer($n2));
        var_dump(is_long($n2));

        var_dump(is_numeric($nome));
        var_dump(is_numeric($n1));
    ?>
</body>
</html>