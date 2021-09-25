<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Junior-Unix");
    $cad->setEmail("sonjunior@live.com");
    $cad->setSenha("password");

    $cad->registrarVenda();


?>