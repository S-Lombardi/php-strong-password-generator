<?php

    session_start();
    if(empty($_SESSION )){
    header('Location: /index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php  echo "Password generata: ".$_SESSION["pwd"]   ?>
    </div>

    <a href="./index.php" value=" ">torna alla pagina iniziale</a>
</body>
</html>