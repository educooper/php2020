<?php

// 55. Conectando o MySQL usando o PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

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
