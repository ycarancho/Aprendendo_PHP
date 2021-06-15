<?php

interface Caracteristicas
{
    const NOME = "Yago";
    public function falar();
}

class Human implements Caracteristicas
{
    public $idade = 24;

    public function falar()
    {
        echo "Ola, Mundo ";
    }
    public function DizerNome()
    {
        echo "Meu nome é " . self::NOME;
    }
}

$yago = new Human;
$yago->falar();
$yago->DizerNome();
