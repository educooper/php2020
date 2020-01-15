<?php
/*18. INCLUDE REQUIRE*/

//Include permite carregar funções diretamente do diretório php com a constante include_path 
//e permite que se carregue arquivos fora do site - o que não é uma boa prática

//include "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
//require_once, trás apenas uma vez o arquivo e exige que ele exista - senão gera erro fatal.
//a partir do php7 o erro fatal se torna excessão para ser tratado com catch
$resultado = somar(10,25);

echo $resultado;

?>