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
        // echo $_SERVER['PHP_SELF'];
        // echo $_SERVER['REQUEST_METHOD'];
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)){
                echo "Name is empty";
            } else{
                echo $name;
            }
        }
    
    ?>

</body>
</html>