<?php


$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", "0008");

$conn->beginTransaction();

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "root";
$senha = "1234";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);

$stmt->execute();

//$conn->rollback();
$conn->commit();

echo "Inserido com beginTransaction();, aguardando o rollback(); ou commit()";
