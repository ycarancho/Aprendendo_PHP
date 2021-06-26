<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

//Inserindo dados em uma tabela

$tabela = "itens";
$nome = "Caneca";
$descricao = "Caneca preta do BATMAN";

$querryInsert = "INSERT INTO $tabela (nome, descricao) VALUE ('$nome', '$descricao')";
$conn->query($querryInsert);
$conn->close();

//Deletando dados de uma tabela
$querrydelete = "DELETE FROM $tabela
WHERE id = 5 OR id = 8
";
$conn->query($querrydelete);
$conn->close();
