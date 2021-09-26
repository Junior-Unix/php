<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "0008"); //Aparentemente só funciona com o dbname antes do host.

$stmt = $conn->prepare("INSERT INTO tb_usuarios (idusuario, deslogin, dessenha) VALUES (:ID, :LOGIN, :PASSWORD)");

$login = "Yoseph-code";
$senha = "password";
$id = 3;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Inserido!";

?>