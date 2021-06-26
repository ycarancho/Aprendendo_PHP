<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Dados do Front
$nome = "Suporte MxTz";
$id = 10;

//Preparando Query
$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ? AND id = ? ");
$stmt->bind_param("si", $nome, $id);
$stmt->execute();
$stmt->close();
