<?php

class Cachorro
{
    function latir()
    {
        echo "Au-Au";
        echo "<br>";
    }

    function andar($m)
    {
        echo "O cachorro andou $m metros !";
        echo "<br>";
    }
}

$cachorro1 = new Cachorro;
$cachorro2 = new Cachorro;

$cachorro1->latir();
$cachorro1->andar(25);
$cachorro2->latir();
$cachorro2->andar(15);
