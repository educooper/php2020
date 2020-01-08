<?php
//variaveis pre definidas (arrays super globais)
//variaveis de ambiente (arrays super global)

$nome = (int)$_GET[""]
//pega informações da URL
//var_dump($nome);

/*le o conteudo do endereço da memória

http://127.0.0.1/udemy20/var/exemplo-04.php?a=123
resultado
string(3) "123"

Para não ser string (padrão do GET) deve-se usar (int) que faz o casting automático do tipo de dado para numero

Para passar mais de um valor na URL usa-se & -> http://127.0.0.1/udemy20/var/exemplo-04.php?a=123&b=456

*/

$ip = $_SERVER["REMOTE_ADDR"];
//escreve o arquivo atual com caminho da pasta "SCRIPT_NAME"
echo $ip;

?>
