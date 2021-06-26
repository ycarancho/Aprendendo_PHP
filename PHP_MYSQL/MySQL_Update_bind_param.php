<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Dados do Front
$id = 11;
$nome = "Sofa";
$descricao = "Estofado preto, com madeira reciclada";
//Preparando query
$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
$stmt->bind_param("ssi", $nome, $descricao, $id);
$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
}
$stmt->close();
