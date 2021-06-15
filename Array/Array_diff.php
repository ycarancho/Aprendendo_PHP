<?php

//Mostrando a diferença entre os arays

$array1 = [1, 2, 3, 4];
$array2 = [3, 1, 6, 7,];

$diferenca = array_diff($array1, $array2); // Diferença do array 1 para o array 2
print_r($diferenca);
echo "<br>";
$diferenca2 = array_diff($array2, $array1); // Diferença do array 2 para o array 1
print_r($diferenca2);
