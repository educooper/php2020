<?php
//26. JASON

//decoce json apos usar Ctrl+U para apresentar JSON original

$json = '[{"nome":"Jo\u003eo","idade":20},{"nome":"Glaucio","idade":25}]';

$data = $json_decode($json,true); //Sempre usar true senão vira object

var_dump($data);

?>
