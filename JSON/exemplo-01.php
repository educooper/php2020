<?php
//25 ARRAYS
//Array com JSON
//LEMBRE DE INSTALAR JSON VIWERER no GOOGLE CHROME

$pessoas = array();
array_push($pessoas,array(
'nome'=>'João',
'idade'=>20
));
array_push($pessoas,array(
'nome'=>'Glaucio',
'idade'=>25
));
echo json_encode($pessoas);

?>
