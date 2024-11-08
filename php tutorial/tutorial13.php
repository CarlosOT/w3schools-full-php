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
        $nome = "Carlos";
        echo strtoupper($nome);
        echo "<br>";
        echo strtolower($nome);
        echo "<br>";
    ?>
    <?php 
        $nomeCompleto = "Ingrid Marinho";
        echo str_replace("Marinho", "Teixeira", $nomeCompleto);
        echo "<br>";
    ?>
    <?php 
        $x = "Hello World";
        $y = explode(" ", $x);
        // echo var_dump($y);
        print_r($y);
        echo "<br>";
    ?>
    <?php 
        $string1 = "Mac";
        $string2 = "Donalds";
        $x = $string1 ." ". $string2;
        echo $x;
        echo "<br>";
    ?>
    <?php 
        $string1 = "Mac";
        $string2 = "Donalds";
        $x = "$string1 $string2";
        echo $x;
    ?>
</body>
</html>