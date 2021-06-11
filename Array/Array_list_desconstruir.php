<?php

$pessoa = [
    "Yago",
    24,
    "Programador",
    "Castanho"
];

print_r($pessoa);
echo "<br>";
list($nome, $idade, $profissao, $cordoolho) = $pessoa;

echo $nome . "<br>";
echo $idade . "<br>";
echo $profissao . "<br>";
echo $cordoolho . "<br>";
