<?php

spl_autoload_register(funciton($class_name){
	$filename = "class".DIRECTORY_SAPARATOR.$class_name.".php";
		if(file_exists(($filename))){
			require_once($filename);
		}
});


?>
