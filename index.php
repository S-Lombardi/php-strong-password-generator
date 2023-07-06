<?php
    session_start();
    //include ("functions.php");

    include __DIR__.'/functions.php';
    generateRandomPsw();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Password Generate</title>
</head>
<body>
    <div class="container">
        <div class="bg-primary mt-5 p-4 rounded">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <form class="form" action="./index.php" method="GET">
                        <!-- Input per scegliere il numero dei caratteri -->
                        <label for="quantity" class="text-">Scegli un numero per generare la tua password</label>
                        <input type="number" id="quantity" name="character_quantity" min="5" max="15" placeholder="..." class="ms-4">          <input type="submit" value="Invia">
                    </form>
                    
                </div>

            </div>
            <!-- PULSANTE -->
  
            
        </div>
    </div>
    
    
</body>
</html>