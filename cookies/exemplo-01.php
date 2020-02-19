<?php
//76. Cookies

$data = arrray(
    "empresa"=>"HCode Treinamentos"  
  );

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";
?>
