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
        $a = 5;
        if ($a < 10) $b = "Hello";
        echo $b;
        echo "<br>";
    ?>
    <?php 
        $a = 13;
        $b = $a < 10 ? "Hello" : "Good Bye";
        echo $b;
        echo "<br>";
    ?>
    <?php 
        $favcolor = "rosa";
        switch ($favcolor) {
          case "red":
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        echo "<br>";
    ?>
    <?php 
        $d = 5;

        switch ($d) {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:  
            echo "The weeks feels so long!";
            break;
          case 6:
          case 0:
            echo "Weekends are the best!";
            break;
          default:
            echo "Something went wrong";
        }
    ?>
</body>
</html>