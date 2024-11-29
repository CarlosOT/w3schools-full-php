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
        $x = 75;
  
        function myfunction() {
          echo $GLOBALS['x'];
        }
        
        myfunction();
        echo "<br>";
    ?>
    <?php 
        $y = 100;

        function myfunction2() {
            global $y;
            echo $y;
        }
        
        myfunction2();
        echo "<br>";
    ?>
</body>
</html>