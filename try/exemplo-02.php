<?php
//77.Try e Catch
function trataNome($name){

    if(!$name){

    throw new Exception("nenhum nome foi informado.", 1);

  }

    echo ucfirst($name)."<br>";

}

try{
  
    trataNome("Joao");
    trataNome("");

}catch(Exception $e){
    
    echo $e->getMessage();
    
}finally{

    echo "Executou o Try!";

}
?>
