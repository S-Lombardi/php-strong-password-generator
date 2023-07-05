<?php


    
function generateRandomPsw(){

    if(isset($_GET['character_quantity']) && $_GET['character_quantity'] != '' ){

       //creo variabile in cui inserire la psw generata
        $random_psw = "";
 
        var_dump( $_GET['character_quantity']);
        //stringa dalla quale prendere lettere casuali
        $string_for_psw= "qwertyuiopasdfghjklQWERTYUIOPASDFGHJKL";
        $string_for_psw_length= strlen($string_for_psw);

        //ciclo il numero scelto dall'utente 
        for($i=0; $i < $_GET['character_quantity']; $i++){


            //genero  un indice random basato sulla stringa
            $random_index = mt_rand(0, $string_for_psw_length -1);

            //concateno le lettere generate ad ogni ciclo
            $random_psw .= $string_for_psw[$random_index]  ;

            var_dump($random_psw);
            
        }
        
        
        return $random_psw;
    }
}    
 

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generate</title>
</head>
<body>
    
    <form class="form" action="./index.php" method="GET">
        <!-- Input per scegliere il numero dei caratteri -->
        <label for="quantity">Scegli un numero per generare la tua password</label>
        <input type="number" id="quantity" name="character_quantity" min="5" max="15" placeholder="scegli">
        <input type="submit" value="Invia n. caratteri">
        
        <!-- Restituisco la password generata -->
        <div>
            <?php echo  generateRandomPsw() ?>
        </div>
    </form>
    
</body>
</html>