<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "junior", "0008");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (idusuario, deslogin, dessenha) VALUES (:ID, :LOGIN, :PASSWORD)");

$login = "Yoseph-code";
$password = "password";
$id = 3;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", 3);

$stmt->execute();

echo "Inserido OK!";

?>