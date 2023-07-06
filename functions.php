<?php
    
function generateRandomPsw(){

    if(isset($_GET['character_quantity']) && $_GET['character_quantity'] != '' ){

       //creo variabile in cui inserire la psw generata
        $random_psw = "";
 
        //stringa dalla quale prendere lettere casuali
        $string_for_psw= "qwertyuiopasdfghjklQWERTYUIOPASDFGHJKL123456789-_";
        $string_for_psw_length= strlen($string_for_psw);

        //ciclo il numero scelto dall'utente 
        for($i=0; $i < $_GET['character_quantity']; $i++){


            //genero  un indice random basato sulla stringa
            $random_index = mt_rand(0, $string_for_psw_length -1);

            //concateno le lettere generate ad ogni ciclo
            $random_psw .= $string_for_psw[$random_index]  ;
            
        }
        

        session_start();
        $_SESSION["pwd"] = $random_psw;
        header('Location: ./success.php');
        
    }
}    
 

?>