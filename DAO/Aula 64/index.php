<?php

require_once("config.php");
// Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(26);
//echo $root;

//Carrega uma lsita de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lsita de usuarios buscando por login

$search = Usuario::search("a");

echo json_encode($search);

?>
