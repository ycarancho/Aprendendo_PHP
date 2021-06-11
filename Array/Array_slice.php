<?php
//Essa função funciona como a substr
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11, 12, 13, 14, 15,];

$slice1 = array_slice($array, 2, 4); /* começo a pegar do indice 2 = 3,
 e pego 4 numeros (contando com o indice 2) = 3, 4, 5, 6*/
print_r($slice1). "<bt>";;

$slice2 = array_slice($array, 6, -5); /*começo a pegar do indice 6 = 7, 
e corto 5 numeros do final pegando o proximo = 10*/ 
echo "<bt>";
print_r($slice2);
