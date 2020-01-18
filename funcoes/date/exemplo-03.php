<?php

//38. SETLOCALE

/*
Linux e Windows tem diferentes regras de acentuação utf8 por exemplo
por isso devemos indicar 3 padrões 
*/

setlocale(LC_ALL,"pt-BR","pt-BR.utf=8","portuguese");

echo strftime("%A %B"); // DIFERENTE DE STRTOTIME codificação disponivle em php.net

?>