<?php 
$arr = [];
for ($i=0; $i < 20; $i++) { 
    array_push($arr, $i);

    if ($arr[$i] != null) {
        echo " - " . $arr[$i] . "<br>";
    }
}