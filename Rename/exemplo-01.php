<?php
//74. Movendo um arquivo
$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir1)) mkdir($dir1);

if(!file_exists($dir1 . DIRECTOR_SEPARATOR . $filename)) {

  $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
  
  fwrite($file, date("Y-m-d H:i:s"));
  
  fclose($file);

}

?>
