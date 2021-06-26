<?php
//Conexão

$host = "localhost";
$user = "root";
$pass = "";
$db = "aula_banco";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";

$resutl = $conn->query($q);
$conn->close();

//UM RESULTADO
// $item = $resutl->fetch_assoc();

//TODOS OS RESULTADOS
$itens = $resutl->fetch_all();
// print_r($itens);
foreach ($itens as $key) {
    echo "," . $key[1] . " - " . $key[2];
}
