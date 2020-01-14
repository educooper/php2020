<?php

//28. SESSÕES

require_once("config.php");

session_unset($_SESSION['nome']);
//limpa a sessão especifica do nome ou ($_SESSION) para limpar todas as sessões ativas

echo $_SESSION['nome'];

//Criação de Sessão  - testar Exemplo 02 e depois exemplo 01.
//Lembre-se arquivos de configuração .inc não são seguros. 
//Para boas praticas se usa confi ou configurator.php com as regras de sesson start bem como outras diretivas 

session_destroy();
//limpa sessão da memória remove usuário da sessão atual


?>
