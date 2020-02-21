<?php
//77. Try e Catch
try{
  throw new Exception("Ouve um erro.", 400);
  
}catch(Exception $e){

    echo json_encode(array(
      "message"=>$e->getMessage(),
      "linha"=>$e->getLine(),
      "file"=>$e->getFile(),
      "file"=>$e->getCode()  
    ));

}


?>
