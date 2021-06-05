<?php

function teste (){
    $a = 0;
    $a++;

    echo $a;
    echo "<br>";
}
teste ();
teste ();
teste ();
teste ();

function testeStatic (){
    static $a = 0;
    $a++;
    echo $a;
    echo "<br>";
}
testeStatic();
testeStatic();
testeStatic();
testeStatic();