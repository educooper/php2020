<?php
//71 - file gets
$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
//Fatal error: Uncaught Error: Class 'finfo' not found in 
//D:\xampp\htdocs\udemy-20\FGETS\exemplo-02.php:7 Stack trace: #0 {main}
//thrown in D:\xampp\htdocs\udemy-20\FGETS\exemplo-02.php on line 7
$mimetype = $fileinfo->$file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?$base64encode?>" target="_blank">Link Para Imagem </a>

<img src="<?=$base64encode?>" alt="">