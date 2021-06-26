<?php
//Conexão
$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Dados do Front
$name = "Celular Xiaomi MI 9";
$description = "Novo, fabricado na China";
//Preparando Query Statement, inserção de dados
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");
/* recebendo duas Strings, BIND_PARAM garante que os dados realmente são do mesmo tipo
que os do Banco, INT = I, D = DOUBLE S = STRING etc..*/
$stmt->bind_param("ss", $name, $description);
//Executa a Query 
$stmt->execute();
$stmt->close();
