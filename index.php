<?php
    include __DIR__.'/functions.php';
    // oppure --> include ("functions.php");

    generateRandomPsw();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generate</title>
</head>
<body>
    <div class="wrapper">

        <div class="container">
            <div class="bg-light mt-5 p-4 rounded ">
                <div class="row">
                    <div class="col-auto">
                        <form class="form" action="./index.php" method="GET">
                            <label for="quantity" class="text-">Scegli un numero per generare la tua password</label>
                            <!-- CAMPO INPUT per scegliere il numero dei caratteri -->
                            <input type="number" id="quantity" name="character_quantity" min="5" max="15" placeholder="..." class="ms-4">
                            <!-- PULSANTE -->
                            <input type="submit" value="Invia" class=" ">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>