<?php
$conn = new mysqli("localhost", "root", "0008", "dbphp7");
    if($conn->connect_error){
        echo "Error: . $conn->connect_error";
        exit;
    }else{
        echo "Conectado!";
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ? )");

    $stmt->bind_param("ss", $login, $pass);

    $login = "user";
    $pass = "1234";

    $stmt->execute(); //Cada vez que rodar esse programa irá acrescentar o mesmo usuário.



?>