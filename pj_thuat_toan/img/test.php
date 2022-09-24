<?php
header("Content-Type: image/png");
$im = @imagecreate(500, 500);
   // or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 103, 0);
$white_color = imagecolorallocate($im, 255, 255, 255);
imagearc($im, 200, 150, 200, 200,  0, 360, $white_color);
// $text_color = imagecolorallocate($im, 255, 255, 255);
// imagestring($im, 300, 100, 100,  "Nguyen van vet",$text_color);
imagepng($im);
imagedestroy($im);
?>