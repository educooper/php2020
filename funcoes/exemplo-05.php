<?php
//33.PASAGEM DE PARAMETROS DE FUNÇÔES POR VALOR E POR REFERENCIA
/*
*/

$a = 10;

function trocaValor($b){
   $a += 50;
   return $b;
}

echo $trocaValor($a);
echo "<br />";
echo $a;

echo

?>
