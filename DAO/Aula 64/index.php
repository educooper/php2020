<?php

require_once("config.php");
// Carrega um usuario
//$pesquisa = new Usuario();
//$pesquisa->loadbyId(26);
//echo $pesquisa;

//Carrega uma lsita de usuarios
//
//$lista = Usuario::getList();
//
//echo json_encode($lista);

//Carrega uma lsita de usuarios buscando por login

//$search = Usuario::search("a");

//echo json_encode($search);


//carrega um usuario usando um login e uma senha

//$usuario = new Usuario();

//$usuario->login("vizinha", "69");

//echo $usuario;


$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;


?>