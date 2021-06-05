<?php

function atribpessoal($nome, $idade)
{
    if (is_string($nome) && is_int($idade)) {
        echo "Meu nome é $nome e tenho $idade anos ";
    } else {
        echo "Insira dados validos ";
    }
};


$nome = "Yago";
$idade = 24;

atribpessoal($nome, $idade);
