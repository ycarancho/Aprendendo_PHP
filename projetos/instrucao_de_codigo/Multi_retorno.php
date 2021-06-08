<?php

function multiret($nome, $idade = 0){
    $nome = "Sr. $nome";
    $idade = "Você tem $idade anos";

    return [$nome, $idade];
}


$retorno = multiret("Yago", 24);

echo "$retorno[0], $retorno[1]";