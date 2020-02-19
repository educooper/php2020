<?php
//72. Download de arquivos com file_get_contents
$link = "http://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);
//var_dump($content);
$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">