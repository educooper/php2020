<?php

//37. FUNÇÃO DATE E TIME
/*

Não é sensível ao setlocale, isto é, não identifica automaticamente fuso horário, a  não ser timestamp do servidor
*/
echo date("d/m/Y H:i:s", 1579339751); //timestamp

echo "<br />";

echo time();

//teste - coloque o resultado na função date.

?>
