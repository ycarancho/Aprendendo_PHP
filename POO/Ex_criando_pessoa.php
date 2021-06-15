<?php

class Pessoa
{
    public $idade;
    public $nome;

    function andar($km)
    {
        return $km . " km";
    }
}

$pessoa1 = new Pessoa;
$pessoa1->idade = 24;
$pessoa1->nome = "Yago";

echo " $pessoa1->nome tem $pessoa1->idade, e em uma corrida, percorreu " . $pessoa1->andar(15);
