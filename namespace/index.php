<?php

//51.NAMESPACE

require_once("cponfig.php");


$cad = new Cadastro;

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

echo $cad;

?>
