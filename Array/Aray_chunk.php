<?php

$arr = range(1, 25);

$arrayquebrado = array_chunk($arr, 5);

// print_r($arrayquebrado);
for ($i=0; $i < count($arrayquebrado) ; $i++) { 
     echo "imprimindo possição do array" . ($i + 1) . "<br>";

     for ($j=0; $j <count($arrayquebrado) ; $j++) { 
        echo $arrayquebrado[$i][$j]. "<br>";
     }
}