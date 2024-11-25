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
        $cars = array("Volvo", "BMW", "Toyota");
        echo $cars[0];
        echo "<br>";
        array_push($cars, "Ford");
        var_dump($cars);
        echo "<br>";
    ?>
    <?php 
        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        var_dump($car);
        echo "<br>";
        echo $car["brand"];
        echo "<br>";
        echo $car["brand"] = "FIAT";
        echo "<br>";
    ?>
    <?php 
        function myFunction() {
            echo "I come from a function!";
          }
          
          $myArr = array("Volvo", 15, myFunction());
          
          $myArr[2];
    ?>
</body>
</html>