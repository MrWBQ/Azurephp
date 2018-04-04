<?php

// echo "Hello Azure!";

$im = imagecreatefrompng("SmallMario.png");

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);

// var_dump($im)

?>