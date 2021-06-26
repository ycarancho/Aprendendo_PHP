<?php
//Conexão
$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//Dados do front
$nome = "Monitor Philips";
$descricao = "20 Polegadas, preto LCD Touch";
//Preparando Query

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->execute();
