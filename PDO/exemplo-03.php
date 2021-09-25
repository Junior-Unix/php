<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "junior", "0008");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Yoseph-code";
$password = "password";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam("PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

?>