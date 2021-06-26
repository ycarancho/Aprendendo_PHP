<?php
//Conexão
$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//Dados do front
$id = 3;
//Preprando Query

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");
$stmt->bindParam(":id", $id);
$stmt->execute();
// $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($dado);
$dado2 = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($dado2);
