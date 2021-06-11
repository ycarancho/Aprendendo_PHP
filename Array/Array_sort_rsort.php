<?php
// FUNCIONA TAMBEM PARA ORDENAR EM ORDEM ALFABETICA.

$arr = [10, 20, 30, 22, 5, 1, 6, 2, 100, 80,];
//Ordenação crescente
sort($arr);
print_r($arr);

echo "<br>";

//Ordenação decrescente
rsort($arr);
print_r($arr);
