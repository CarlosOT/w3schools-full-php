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
        $a = array("Volvo", "BMW", "Toyota"); // indexed array
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
        
        $a = (object) $a;
        $b = (object) $b;
        echo var_dump($a);
        echo "<br>";
        echo var_dump($b);
    ?>
</body>
</html>