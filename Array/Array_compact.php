<?php

$nome = "yago";
$idade = 24;
$altura = 1.79;
$profissao = "programador";

$pessoa = compact("nome", "idade", "altura", "profissao");

print_r($pessoa);
