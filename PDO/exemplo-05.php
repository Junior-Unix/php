<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "0008");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado!"



?>