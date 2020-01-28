<?php
/*
COMANDOS NO MICROSOFT SERVER EXPRESS

CREATE TABLE tb_usuarios (
idusuario NOT NULL IDENTIFY PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
);


SELECT * FROM tb_usuarios;

INSERT INTO tb_usuarios (deslogin,dessenha) VALUES ('user',  '!@#$');


IMPORTANTE - ADICIONAR DLLS SQL SERVER NO PHP.INI depois da linha extensios l.846

*/

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
//connection pooling mantem estado da conexão emm aberto - deixar porta aberta

$stmt = $conn->prapare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$resulta = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

foreach ($row as $key = $value){

    echo "<strong>".$key."</strong>".$value."<br/>";
    }

echo "====================================================================<br />";

}

//var_dump($results);

?>

