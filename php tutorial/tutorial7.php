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
        var_dump($cars); 
    ?>
    <br>
    <?php 
        class Car{
            public $color;
            public $model;

            public function __construct($color, $model){
                $this -> color = $color;
                $this -> model = $model;
            }

            public function message(){
                return "My car is a $this -> color $this -> model!";
            }

        }

        $myCar = new Car("red", "volvo");
        var_dump($myCar);
    ?>
</body>
</html>