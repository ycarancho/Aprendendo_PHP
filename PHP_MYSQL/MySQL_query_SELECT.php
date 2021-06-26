<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Query SELECT

$selectall = "SELECT * FROM itens";
$retquery = $conn->query($selectall);

print_r($retquery);
$conn->close();
