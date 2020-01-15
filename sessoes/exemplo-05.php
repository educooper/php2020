<?php

//30. FUNÇÕES EM SESSÕES

require_once("config.php");

echo session_save_path();

echo "<br />";

var_dump(session_status());

echo "<br />";

switch(session_status()){
    
    case PHP_SESSION_DISABLED:
        echo " as sessões estão desabilitadas ";
    break;
    case PHP_SESSION_NONE:
        echo " as sessões estiverem habilitadas, mas nenhuma existir ";
    break;
    case PHP_SESSION_ACTIVE:
        echo " existe uma sessão habilitada ";
    break;

}

?>