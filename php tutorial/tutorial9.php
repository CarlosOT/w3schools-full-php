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
        $floatNum = 5.7;
        echo $floatNum;
        echo var_dump($floatNum);
        echo "<br>";
        $cast_toInt = (int) $floatNum;
        echo $cast_toInt;
        echo var_dump($cast_toInt);
        echo "<br>";
        $cast_toString = (string) $floatNum;
        echo $cast_toString;
        echo var_dump($cast_toString);
    ?>
</body>
</html>