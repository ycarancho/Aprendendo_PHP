<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Criando tabela

$queryCreate = "CREATE TABLE teste (
    nome VARCHAR (100) NOT NULL,
    idade INT NOT NULL
)";

// $conn->query($queryCreate);
// $conn->close();

//Deletando tabela]

$queryDelete = "DROP TABLE teste;";
$conn->query($queryDelete);
$conn->close();
