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
        $t = (int) date("H");

        if ($t < 18){
            echo "Bom dia";
        }else{
            echo "Boa noite";
        }
    ?>
</body>
</html>