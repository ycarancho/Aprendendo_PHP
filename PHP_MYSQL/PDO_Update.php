<?php
//Conexão
$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//Dados do front
$id = 13;
$nome = "Monitor LG";
$descricao = "30 Polegadas, Ultra Wide";
//Preparando Query
$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id ");
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":id", $id);
$stmt->execute();
