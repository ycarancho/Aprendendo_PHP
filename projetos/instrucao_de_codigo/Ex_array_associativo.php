<?php

$arr = [
    'Motor' => 2000,
    'Porta' => 500,
    'Retrovisor' => 10,
    'Tinta' => 5,
    'Maçaneta' => 8
];

function itemcaro ($arr){

    $itenscaros = [];
        
    foreach ($arr as $item => $valor) {
        if ($valor >= 10) {
            array_push($itenscaros, $item, $valor);
        }
    }
    return $itenscaros;
}

$ret = itemcaro($arr);

var_dump($ret);