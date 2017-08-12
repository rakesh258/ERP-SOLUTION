<?php
session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;

$img_width = 48;
$img_height = 26;

header('Content-type: image/jpeg');

$image = imagecreate($img_width, $img_height); // create background image with dimensions
$bg = imagecolorallocate($image, 0, 0, 0); //background color blue
$fg = imagecolorallocate($image, 255, 255, 255);//text color white
imagefill($image, 0, 0, $bg);
imagestring($image, 5, 5, 5,  $captcha_num, $fg);
imagejpeg($image);
imagedestroy($image);

?>