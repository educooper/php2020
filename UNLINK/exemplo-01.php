<?php
//70.Delete
$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

echo "Arquivo removido com sucesso!";

?>