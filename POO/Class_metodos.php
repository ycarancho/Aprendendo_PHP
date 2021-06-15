<?php

class Pessoa //Classe 
{
    function falar() // Metodo
    {
        echo " Oi eu sou um objeto ! <br>";
    }
    function soma($a, $b)
    {
        echo $a + $b;
    }
}

// Objeto

$yago = new Pessoa;
$anderson = new Pessoa;

// Objeto executando o metodo
$yago->falar();
$yago->soma(10, 15);
echo "<br>";
$anderson->soma(15, 15);
