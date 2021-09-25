<?php

$conn = new mysqli("localhost", "root", "0008", "dbphp7");
    if($conn->connect_error){
        echo "Erro: " . $conn->connect_error;
    }

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
    while($row = $result->fetch_array()){
        var_dump($row);
    }