<?php

$host = "localhost";
$user = "root";
$pass = "sss";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_errno) {
    echo "Erro na conexão com banco <br>";
    echo "Erro: " . $conn->connect_error;
}
