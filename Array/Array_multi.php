<?php

$arraypai = [ 
    [1, 2, 3, 4],
    [4, 3, 2, 1],
    [3, 7, 8, 7],
];


for ($i=0; $i < count($arraypai) ; $i++) { 
    
    // Imprimindo o indicide do array = quantidade de item que tem dentro do arraypai
    echo "Iprimindo array externo: " . ($i + 1) . "<br>";

    for ($j=0; $j <count($arraypai) ; $j++) { 
        
        echo $arraypai[$i][$j] . "<br>";
    }
}