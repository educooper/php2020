<?php

//50. INLCUINDO CLASSES COM AUTOLOAD

/*

*/

function __autoload($nomeClasse){

    var_dump($nomeClasse);

    require_once("$nomeClasse.php");
}

echo "<br />";
$carro = new DelRey();

$carro->acelerar(80);

?>