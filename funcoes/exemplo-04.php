<?php
//32.PARAMETROS DE FUNÇÔES
/*
Função que pode receber vários parametros ou não.
func_get_args retorna valores passador ao argumehnto da função
*/

function ola(){

   $argumentos = func_get_args();
   
    return $argumentos;
}

var_dump(ola("Bom dia"));

?>
