<?php
$name = "image";

	if(!is_dir($name)){
		mkdir($name);
		echo "Diret�rio $name criado com sucesso!";
	}else{
		//rmdir($name); // caso queira remover o que existe e criar.
		echo "Diret�rio $name j� existe!";
	}
?>
