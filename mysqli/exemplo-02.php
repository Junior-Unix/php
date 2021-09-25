<?php

$conn = new mysqli("localhost", "root", "0008", "dbphp7");
    if($conn->connect_error){
        echo "Erro: " . $conn->connect_error;
    }

