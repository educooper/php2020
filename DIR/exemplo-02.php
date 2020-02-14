<?php
//68. Lendo e manipulando diretorios e arquivos no php7
$images = scandir("images");
//var_dump($images);

$data = array();

foreach($images as $img){ 
if (!in_array($img, array(".", ".."))) {
	
	$filename = "images" . DIRECTORY_SEPARATOR . $img;
	
	$info = pathinfo($filename);
	
	$info["size"] = filesize($filename);
	$info["modifield"] = date("d/m/Y H:i:s", filemtime($filename));
	$info["url"] = "http://127.0.0.1/udemy-20/DIR/".str_replace("\\", "/", $filename);
	
	array_push($data,$info);
	
	}

}

echo json_encode($data);
	
?>