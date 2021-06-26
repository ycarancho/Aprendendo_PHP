<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Dados do Front
$id = 3;
//Preparando Query
$stmt = $conn->prepare("SELECT * FROM itens 
WHERE id > ?");
//Metodo de segurança
$stmt->bind_param("i", $id);
$stmt->execute();
//Pegando resultado 
$result = $stmt->get_result();
//Pegando todos os dados e transformando em Array
$dados = $result->fetch_all();

foreach ($dados as $key) {
    echo $key[1] . " " . $key[2] . " ";
}
$stmt->close();
