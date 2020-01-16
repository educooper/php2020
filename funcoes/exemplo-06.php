<?php

//33 . PASSAGEM DE PARAMETROAS AS FUNÇÔES POR VALOR E REFERENCIA

$pessoa = array(
  'nome' => 'João',
  'idade' => 20
);
foreach ($pessoa as &$value){
    //passando value por referencia, continua 20 se apagar.
    
    if gettypt($value) === 'integer') $value += 10;
    
    echo $value. "<br />";

}
print_r($pessoa);

?>
