<?php

//61. PDO Usando Transações


$conn = new  PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM td_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();


echo "Deletado OK!";



?>