<?php 
//16. ESCOPO DE VARIAVEL - UDEMY HCODE

$nome = "Glaucio";

function teste(){
  global $nome;
  echo $nome;

}

function teste2(){

$nome = "João";

echo $nome." agora na função 2";
}

teste();


teste2();

?>
