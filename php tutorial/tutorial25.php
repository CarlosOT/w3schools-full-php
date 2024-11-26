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
        $fruits = array("Apple", "Banana", "Cherry");
        $fruits[] = "Orange";
        var_dump($fruits);
        echo "<br>";
        array_push($fruits, "Orange", "Kiwi");
        var_dump($fruits);
        echo "<br>";
    ?>
    <?php 
        $cars = array("brand" => "Ford");
        $cars["color"] = "Red";
        var_dump($cars);
        echo "<br>";
        $cars += ["year" => 1964, "type" => "SUV"];
        var_dump($cars);
    ?>
    <?php 
    ?>
</body>
</html>