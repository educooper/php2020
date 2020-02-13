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

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/
/*
//Alterar um usuário
$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadbyId(14);
$usuario->delete();
echo $usuario;

?>
