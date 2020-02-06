<?php

//Carrega uma lsita de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega um usuario usando um login e uma senha

//$usuario = new Usuario();

//$usuario->login("vizinha", "69");

//echo $usuario;

//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("Su");
echo json_encode($search);

?>