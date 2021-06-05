<?php
$arr = [];
$i = 0;

while ($i < 20) {

    $arr[$i] = $i * $i;
    echo $arr[$i] . "<br>";

    if ($arr[$i] == 10) {
        echo $arr[$i] . "Sai do loop" . "<br>";

        break;
    }
    $i++;
}

// for ($i = 0; $i < count($arr); $i++) {
//     echo $arr[$i];
// }
