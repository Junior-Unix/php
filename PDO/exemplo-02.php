<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "junior", "0008");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY  deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>