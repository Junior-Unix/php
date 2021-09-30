<?php

$filename = "image\walle-15.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;


?>
	<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a?>
	<img src="<?=$base64encode?>">


/*
<?php
//para transformar imagem em código.

$filename = "imagem_aqui.extencao";
$base64 = base64_encode(file_get_contents($filename));
echo "data:image/png;base64," . $base64;

?>
*/