<?php

//58. PDO Inserindo dados 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
//connection pooling mantem estado da conexão emm aberto - deixar porta aberta

$stmt = $conn->prapare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "José";
$password = "12345678";

$stmt->bindParam("LOGIN", $login);
$stmt->bindParam("PASSWORD", $password);

$stmt->execute();


echo "Inserido OK";
?>
