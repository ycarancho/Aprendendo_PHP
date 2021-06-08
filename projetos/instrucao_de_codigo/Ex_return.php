<?php 

function aoquadrado ($num){
$quadrado= $num**2;
return $quadrado;
}

$num = 15;

$retorno = aoquadrado($num);

echo "O quadrado do numero $num é $retorno";

