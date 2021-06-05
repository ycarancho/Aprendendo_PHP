<?php

$nome1 = "Yago";
$nome2 = "Pedro";

if ($nome1 != $nome2) {
    echo "Os nomes são diferentes" . "<br>";
    echo $nome1 . "<br>";
    echo $nome2 . "<br>";
}

if ($nome1 == $nome2) {
    echo "Os nomes são iguais " . "<br>";
}

$n1 = 10;
$n2 = 8;
if ($n1 >= $n2) {
    echo "O primeiro numero é maior que o segundo " . "<br>";
    echo $n1 . "<br>";
    echo $n2 . "<br>";
}

if (!($n1 <= $n2)) {
    echo "Condição negada, não é maior mas entrou no IF" . "<br>";
}
