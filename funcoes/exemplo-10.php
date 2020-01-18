<?php

//35. FUNÇÕES ANONIMAS

function test($callback){

    //processo lento

    $callback();

}

test(function(){

    echo "Terminou!";

});

?>
