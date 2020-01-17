<?php

//37. FUNÇÃO DATE E TIME

//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("day");
$ts = strtotime("+2 week");
echo date("l, d/m/Y", $ts);

?>
