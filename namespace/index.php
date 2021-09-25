<?php

    require_once("config.php");

    $cad = new Cadastro();

    $cad->setNome("Junior-Unix");
    $cad->setEmail("sonjunior@live.com");
    $cad->setSenha("password");

    echo $cad;


?>