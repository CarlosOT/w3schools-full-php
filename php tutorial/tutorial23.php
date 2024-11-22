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
        function sumMyNumber(...$x){
            $n = 0;
            $len = count($x);
            for($i = 0; $i < $len; $i++){
                $n += $x[$i];
            }
            return $n;
        }

        $a = sumMyNumber(5, 2, 6, 2, 7, 7);
        echo $a;
        echo "<br>";
    ?>
    <?php 
        function myFamily($lastname, ...$firstname) {
            $txt = "";
            $len = count($firstname);
            for($i = 0; $i < $len; $i++) {
              $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
            }
            return $txt;
          }
          
          $a = myFamily("Doe", "Jane", "John", "Joey");
          echo $a;
          echo "<br>";
    ?>
    <?php
        function addNumbers(int $a, int $b) : int{
            return $a + $b;
          }
          echo addNumbers(5, 10);
    ?>
</body>
</html>