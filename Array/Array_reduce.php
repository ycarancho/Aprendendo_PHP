<?php

$num = [10, 20, 100, 250, 1, 30];


function soma($a, $b)
{

    return $a + $b;
};


echo $result = array_reduce($num, "soma");
