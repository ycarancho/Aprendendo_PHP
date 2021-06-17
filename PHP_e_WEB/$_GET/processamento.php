<?php
if (isset($_GET['nome'])) { // isset() verifica se o get está preenchido
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "Padrão";
    $idade = "Padrão";
}

?>

<h1>O seu nome é <?= $nome; ?> e você tem <?= $idade; ?> anos </h1>