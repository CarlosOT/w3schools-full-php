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
        function myMessage(){
            echo "Hello World";
        }
        myMessage();
        echo "<br>";
        echo "<br>";
    ?>
    <?php 
        function familyName($fname = "Default") {
            echo "$fname Refsnes.<br>";
          }
          
          familyName($name = "Jani");
          familyName("Hege");
          familyName("Stale");
          familyName("Kai Jim");
          familyName("Borge");
          familyName();
          echo "<br>";
          echo "<br>";
    ?>
    <?php 
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
          }
          
          echo "5 + 10 = " . sum(5, 10) . "<br>";
          echo "7 + 13 = " . sum(7, 13) . "<br>";
          echo "2 + 4 = " . sum(2, 4);
          echo "<br>";
          echo "<br>";
    ?>
    <?php 
        function counter(&$value){
            $value += 1;
        }

        $num = 0;
        counter($num);
        echo $num;
        counter($num);
        echo "<br>";
        echo $num;
    ?>
</body>
</html>