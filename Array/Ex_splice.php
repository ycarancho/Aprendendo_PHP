<?php

$frutas = [
    "pera",
    "uva",
    "maça",
    "banana"
];

// $removidos = array_splice($frutas, 1,1);
// print_r($removidos);
// echo "<br>";


foreach ($frutas as $key => $value) {
    if ($value == "uva") {
        // echo $key;
        array_splice($frutas,$key,1);

        $frutas[] = "teste";

        foreach ($frutas as $key => $value) {
            echo $value . "<br>";
        }
    }
    
}


