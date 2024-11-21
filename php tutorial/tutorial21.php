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
        $color = array('red', 'green', 'blue', 'yellow');

        foreach($color as $x){
            echo "$x <br>";
        }
        echo "<br>";
    ?>
    <?php 
        class Car{
            public $color;
            public $model;
            public function __construct($color, $model){
                $this -> color = $color;
                $this -> model = $model;
            }
        }

        $myCar = new Car('red', 'Volvo');

        foreach($myCar as $x => $y){
            echo "$x : $y <br>";
        }
        echo "<br>";
    ?>
    <?php 
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $x) :
          echo "$x <br>";
        endforeach;
    ?>
</body>
</html>