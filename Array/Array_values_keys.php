<?php

$carro = [
    'Marca' => 'BMW',
    'Motor' => 2.4,
    'Teto Solar' => true,
    'Cambio' => 'Manual',
    'Porta' => 4
];

$chaves = array_keys($carro);
$valores = array_values($carro);

print_r($chaves);
echo "<br>";
print_r($valores);