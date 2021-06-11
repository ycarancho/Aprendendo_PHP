<?php

$arr = range(10, 45);

foreach ($arr as $key => $value) {
    $soma = $value + 6;
    if ($soma >= 30) {
        echo "Valor muito alto";
        break;
    }else {
        echo $soma . "<br>";
    }
}