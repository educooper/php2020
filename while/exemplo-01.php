<?php
//24. WHILE

//significa faça enquanto


$condicao = true;

$nome = "Eduardo";

while ($condicao) {
    
    $numero = rand(1,10);

    if($numero === 3){

        echo "TRÊS!!!";
        $condicao = false;
        
    }

        

            echo $numero . " ";

}


?>