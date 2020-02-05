<?php

require_once("config.php");

$root = new Sql();

$root->loadById(1);

echo json_encode($root);

?>