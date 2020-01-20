<?php

//51.NAMESPACE

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro;

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->reguistrarVenda();
?>
