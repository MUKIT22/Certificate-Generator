<?php
header('content-type:image/jpeg');
$font="BRUSHSCI.TTF";
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="Mukit Muntasir";
imagettftext($image,50,0,365,420,$color,$font,$name);
$date="25th march 2021";
imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
imagejpeg($image);
imagedestroy($image);
?>