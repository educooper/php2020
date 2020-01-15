<?php

//30. SESSÕES

session_id('3oi216jbfidi4ma9u6qagttsmd');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br />";

var_dump($_SESSION);

?>
