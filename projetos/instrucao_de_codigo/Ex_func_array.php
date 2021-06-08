<?php 
 
 function arraydenum ($arr){
     $novoar = [];
    for ($i=0; $i < count($arr) ; $i++) { 
        if ($arr[$i] > 7) {
            array_push($novoar, $arr[$i]);
        }
    }
    return $novoar;
 }
 function imprimearray ($array) {
    foreach ($array as $arrayprint) {
        echo $arrayprint . "<br>";
    }
    }

$lista = [];

 for ($j=0; $j < 30 ; $j++) { 
     array_push($lista, $j);
 }

 $ret1 = arraydenum($lista);

 imprimearray($ret1);

