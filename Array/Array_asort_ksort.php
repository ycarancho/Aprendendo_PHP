<?php
//ORDENANDO ARRAYS ASSOCIARIVOS ASORT = VALOR DAS CHAVES  / KSORT = CHAVES 

$arr = [
    'Yago' => 24,
    'Anderson' => 20,
    'Santana' => 15,
    'Pinheiro' => 30
];


//ASORT  Ordem pelo valor das chaves nesse caso são os  NUMEROS; 
asort($arr); // Numeros crescentes
print_r($arr);
echo "<br>";
//forma inversa
arsort($arr); // Numeros decrescentes
print_r($arr);

echo "<br>";
echo "<br>";

//KSORT Ordem pelo indice do array nesse caso são os NOMES;

ksort($arr); // Ordem alfabetica
print_r($arr);
echo "<br>";
//forma inversa 
krsort($arr); // Reverso a ordem alfabetica
print_r($arr);
