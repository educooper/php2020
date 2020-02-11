<?php

require_once("config.php");
//62. DAO
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

// Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(26);
//echo $root;

//Carrega uma lsita de usuarios
//
//$lista = Usuario::getList();
//
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando por login

//$search = Usuario::search("dri");

//echo json_encode($search);


//carrega um usuario usando um login e uma senha

//$usuario = new Usuario();

//$usuario->login("vizinha", "69");

//echo $usuario;


//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;


$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->delete();
echo $usuario;

?>
