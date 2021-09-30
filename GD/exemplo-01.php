<?php

header("Content-Type: image/png"); // para descobrir erros, só descomentar, rodar, descobrir o erro e descomentar.
$image = imagecreate(720, 720);
$image1 = imagecreate(700,500);
$black = imagecolorallocate($image, 0, 0, 0); //Black collor.
$red = imagecolorallocate($image, 255, 0, 0); //Red collor.
$green = imagecolorallocate($image, 0, 255, 0); //Green collor.
imagestring($image, 5, 60, 120, "Deus te abencoe filho!", $red);
imagestring($image, 5, 60, 150, "Amo vc.", $green);
imagepng($image);
imagepng($image1);
imagedestroy($image);
imagedestroy($image1);

?>