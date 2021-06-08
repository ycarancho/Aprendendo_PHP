<?php

$lista = [10, "string", 10.40, "outra string", "string", "string", 1];

$i = 0;

while ($i < 7) {
    if (is_string($lista[$i])) {

        echo $lista[$i]. "<br>";

    // }elseif ($lista[$i] != "") {

    //     echo $lista[$i]. "<br>";

    }
        $i++;
}