<?php
//23. FOR E FOREACH
//usado para percorrer arrays e coleções

$meses = array(

    "janeiro", "Fevereiro", 
    "Março", "Abril", "Maio", 
    "Junho", "Julho", "Agosto", 
    "Setembro", "Outubro", "Novembro","Dezembro"

);

foreach ($meses as $index => $mes) {

    echo "indice: ".$index. "<br />";
    echo "O mês é: ".$mes."<br /><br />";
    
}

?>