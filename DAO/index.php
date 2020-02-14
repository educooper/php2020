<?php

require_once("config.php");
//62. DAO
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

// Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(10);
//echo $root;
// ============  ERROS =================

//Carrega uma lsita de usuarios
//
//$lista = Usuario::getList();
//
//echo json_encode($lista);
// ============  OK =================

//Carrega uma lista de usuarios buscando por login

//$search = Usuario::search("dri");

//echo json_encode($search);
// ============  OK =================

//carrega um usuario usando um login e uma senha

//$usuario = new Usuario();

//$usuario->login("vizinha", "69");

//echo $usuario;
// ============  OK =================


$aluno = new Usuario("aluno2", "@lun02");

$aluno->insert();

echo $aluno;


//$usuario = new Usuario();
//$usuario->loadbyId(8);
//$usuario->delete();
//echo $usuario;

?>
