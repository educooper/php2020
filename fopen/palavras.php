<?php
$file = fopen("palavras.txt", "a+");

echo "Arquivo criado com sucesso!";

$frase = "A repetição é mãe da retensão.";

$acento = array
      ((
      "á","à","ã","â","é","è","ê","í","ó","õ","ô","ù","ú","ç"
      ));

$busca
(
for();    
);

$q = strpos($frase, $palavra);

$texto = substr($frase, 0 , $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br />";

var_dump($texto2);

?>
