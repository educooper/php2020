<?php
//32.PARAMETROS DE FUNÇÔES
/*
Quando tem valor padrão e eu quero tirar no resultado, devemos colocar espaço em branco. 
Quando $texto não tem argumento, a linha 11 dá erro. valores obrigatórios sempre estão a esquerda.
Sempre deve-se passar o primeiro parametro para passar o segundo. 
Parametros que  não tem argumento padrão sempre devem ficar a esquerda.
*/

function ola($texto = "mundo", $periodo = "Bom dia "){
   return "Olá $texto!<br />";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Mundo!");
echo ola("Glaucio", Boa tarde");
echo ola("João", "");

?>
