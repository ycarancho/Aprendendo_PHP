<?php
$inteiro = 10;
$float = 10.4;
$bolean = true;
$str = "Não é int";

$msg = "Não é inteiro";


if (is_int($inteiro)) {
    echo "1 - ";
    echo "Sim, è um inteiro" . "<br>";
} else {
    echo "1 - ";
    echo $msg . "<br>";
}


if (is_int($float)) {
    echo "2 - ";
    echo "Sim, è um inteiro" . "<br>";
} else {
    echo "2 - ";
    echo $msg . "<br>";
}

if (is_int($bolean)) {
    echo "3 - ";
    echo "Sim, è um inteiro" . "<br>";
} else {
    echo "3 - ";
    echo $msg . "<br>";
}

if (is_int($str)) {
    echo "4 - ";
    echo "Sim, è um inteiro" . "<br>";
} else {
    echo "4 - ";
    echo $msg . "<br>";
}
