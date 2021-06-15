<?php
//Constante não muda o valor.
class Humano
{
    public const OLHOS = 2;
    public const BRAÇOES = 2;
    public const PERNAS = 2;

    function getOlhos()
    {
        return self::OLHOS;
    }
}

$pessoa = new Humano;
$pessoa->getOlhos();
