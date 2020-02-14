<?php
//68. Lendo e manipulando diretorios e arquivos no php7
$images = candir("images");
//Observação - carregar iamgens na pasta criada.
//var_dump($images);

$data = array();

foreach (in_array($img, array(".", ".."))) {
	
	$filename = "" . DIRECTORT_SEPARATOR . $img;
	
	$info = pathinfo($filename);
	
	$info["size"] = filesize($filename);
	$info["modifield"] = date("d/m/Y H:i:s", filemtime($filename));
	$info["url"] = "http://127.0.0.1/php-2020/DIR/".str_replace("\\", "/", $filename);
	
	array_push($info,$sata);
	
	}	
	
}
	
?>