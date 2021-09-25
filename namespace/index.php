<?php

    require_once("config.php");

    use Cliente\Cadstro;

    $cad = new Cadastro();

    $cad->setNome("Junior-Unix");
    $cad->setEmail("sonjunior@live.com");
    $cad->setSenha("password");

    $cad->registrarVenda();


?>