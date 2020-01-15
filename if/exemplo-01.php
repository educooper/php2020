<?php
/*20. ESTRUTURAS DE CONDIÇÃO */

$qualASuaIdade = 82;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

echo "Criança";

} else if ($qualASuaIdade < $idadeMaior){

    echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor){

    echo "Adulto";

} else if ($qualASuaIdade > $idadeMaior){

    echo "Idoso";

}

//else {
//    echo "Não é criança";
//}
echo "<br />";
//OPERADOR TERNARIO
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de idade";
//IF DE UMA LINHA SÓ

?>