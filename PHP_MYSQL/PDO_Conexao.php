<?php
//Conexão
$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
