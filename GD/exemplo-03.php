<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR ."Bevan" . DIRECTORY_SEPARATOR. "Bevan-Regular.ttf", "CERTIFICADO"); // fonte, distância lateral, distância do topo
imagettftext($image, 32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Junior-Unix");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ") . date("d-m-Y"), $titleColor); // utf8_encode piorou a gráfia.

header("Content-type: image/jpeg");
imagejpeg($image); // em tela.
imagejpeg($image, "certificado-".date("Y-m-d"). " .jpg", 80); //em documento. o 10 no final, diminuiu a qualidade também.

imagedestroy($image);
?>



?>