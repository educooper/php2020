<?php
//76. Cookies
if(isset($_COKKIE['NOME_DO_COOKIE'])){

    $obj = json_decode($_COKKIE['NOME_DO_COOKIE']);

echo $obj->empresa;

}

?>
