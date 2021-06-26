<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Dados do Front
$id = 11;
//Preparando query
$stmt = $conn->prepare("SELECT * FROM itens 
WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dado = $result->fetch_row();
// print_r($dado);
foreach ($dado as $key => $value) {
    echo $value;
}

$stmt->close();
