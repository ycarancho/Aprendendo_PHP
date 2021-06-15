<?php
//Unindo Arrays

$arr1 = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [8, 9, 10, 11, 12];
$arr3 = [13, 14, 15, 16, 17];

$arr4 = array_merge($arr1, $arr2, $arr3);
print_r($arr4);
