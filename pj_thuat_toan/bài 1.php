<?php
header("Content-Type: image/png");
$im = @imagecreate(300, 300)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 103, 0);
$text_color = imagecolorallocate($im, 0, 103, 0);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
imagepng($im);
imagedestroy($im);
?>