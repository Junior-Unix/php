<?php

$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", "0008");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");


$login = "Yhago";
$password = "password";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Update, OK!"


?>