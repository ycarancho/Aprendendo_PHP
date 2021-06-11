<?php

$pessoa = [
    'nome' => 'Yago',
    'idade' => 24,
    'altura'=> 1,79

];


// if (array_key_exists('nome',$pessoa)) {
//     echo "A key existe";
// }else {
//     echo "A key não exite";
// }

// echo "<br>";
// if (array_key_exists('error',$pessoa)) {
//     echo "A key existe";
// }else {
//     echo "A key não exite";
// }


if (isset($pessoa['nome'])) { //Serve tambem para variavel
    echo "A key existe";
}else {
    echo "A key não exite";
}