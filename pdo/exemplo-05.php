<?php

//60. PDO Delete dados 


$conn = new  PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt = $conn->prepare("DELETE FROM td_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!";



?>
