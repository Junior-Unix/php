<?php

$images = scandir("image");

$data = array();

	foreach($images as $img){
		if(!in_array($img, array(".", ".."))){
			$filename = "image" . DIRECTORY_SEPARATOR . $img;
			$info = pathinfo( $filename);
			$info["size"] = filesize($filename);
			$info["modified"] = date("d-m-Y H:I:s", filemtime($filename));
			$info["url"] = "http://localhost/php/DIR/"/* .str_replace("\\", "/", $filename) */;
			array_push($data, $info);
		}
	}

echo json_encode($data);

?>
