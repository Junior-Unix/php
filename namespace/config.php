<?php

spl_autoload_register(function($nameClass){
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

        if(file_exists($filename) === true ){//Ou não precisa colocar === true.
            require_once($filename);
        }
});

