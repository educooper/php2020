<?php
//79.FONTES TRUETYPE GD
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0 , 0, 0);
$gray = imagecolorallocate($image, 100 , 100, 100);

imagettftext($image, 32, 0 , 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image, 32, 0 , 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Eduardo Cupertino");
imagestring($image, 3 , 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

//echo "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";

header("Content-type: image/jpeg");

//imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 96);

imagejpeg($image);

imagedestroy($image);

?>