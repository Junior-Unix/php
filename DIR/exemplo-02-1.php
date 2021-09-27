<?php

$images = scandir("image");

	foreach( $images as $img ){
		if( !in_array( $img, array( ".", ".." ))){
			$filename = "image" . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

				var_dump($info);
		}
	}

?>
