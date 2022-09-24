<?php
  
// It create the size of image or blank image.
$image = imagecreatetruecolor(500, 500);
  
// Set the background color of image.
$bg = imagecolorallocate($image, 0, 103, 0);
   
// Fill background with above selected color.
imagefill($image, 0, 0, $bg); 
  
// allocate colors with alpha values
$yellow = imagecolorallocatealpha($image, 255, 255, 0, 75);
$red    = imagecolorallocatealpha($image, 255, 0, 0, 75);
$blue   = imagecolorallocatealpha($image, 0, 0, 255, 75);
  
// Drawing filled circle
imagefilledellipse($image, 200, 100, 150, 150, $yellow);
imagefilledellipse($image, 275, 100, 150, 150, $red);
imagefilledellipse($image, 240, 180, 150, 150, $blue);
  
//output a correct header!
header('Content-Type: image/png');
  
//output the result
imagepng($image);
imagedestroy($image);
?>