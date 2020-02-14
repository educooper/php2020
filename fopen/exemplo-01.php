<?php
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-d-m H:i:s")."\r\n");
fclose($file);

echo "Arquivo criado com sucesso!";

?>
