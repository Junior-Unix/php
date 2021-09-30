<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor); // fonte, distância lateral, distância do topo
imagestring($image, 5, 440, 350, "Junior-Unix", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ") . date("d-m-Y"), $titleColor); // utf8_encode piorou a gráfia.

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy();
?>