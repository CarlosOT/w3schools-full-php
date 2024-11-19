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
        do{
            echo $i;
            $i++;
        } while ($i < 6);
        echo "<br>"
    ?>
    <?php 
        $x = 1;
        do{
            if ($x == 3) break;
            echo $x;
            $x++;
        }while($x < 6);
    ?>
</body>
</html>