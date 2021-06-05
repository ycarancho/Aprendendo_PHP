<?php


$i = 4;

while ($i < 30) {
    $i = $i + 2;
    echo " - " . $i . "<br>";

    if ($i == 24) {
        echo "Quebrando o laço " . $i;

        break;
    }
}