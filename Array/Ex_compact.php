<?php
$nome = "yago";
$idade = 24;
$altura = 1.79;
$peso = 96;
$profissão = "programador";

$defpessoa = compact("nome", "idade", "altura", "peso", "profissão");

foreach ($defpessoa as $key => $value) {

    echo $key . " - " . $value . "<br>";
}
