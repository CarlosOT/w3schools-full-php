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
        $i = 1;
        while ($i < 6){
            echo $i;
            echo "<br>";
            $i++;
        }
        echo "<br>";
    ?>
    <?php 
        $x = 1;
        while ($x < 6){
            if($x == 3) break;
            echo $x;
            echo "<br>";
            $x++;
        }
        echo "<br>";
    ?>
    <?php 
        $y = 0;
        while ($y < 6) {
          $y++;
          if ($y == 3) continue;
          echo $y;
          echo "<br>";
        }
        echo "<br>";
    ?>
</body>
</html>