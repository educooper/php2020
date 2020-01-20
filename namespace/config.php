<?php

spl_autoload_register(function($nameClass){

    var_dump($nameClass);
   
    $dirClass = "class";
    $filename = $dirClass. DIRECTORY_SEPARATOR . ".php";

        if (file_exists($filename)) {
            require_once($filename);
        }

});

?>
