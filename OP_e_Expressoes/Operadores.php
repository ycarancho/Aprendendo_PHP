<?php
/* Criando operadores*/

$a = 10;
$b = 50;
$c = 2;
do {
    $i= 0;
    for ($i=0;$i < 5; $i++) {
        $d = ($a + $b)/$c;
        $d--; 
     if ($d!=$a) {
         echo "te amo";
     }
    }
}while ($d != 1);
