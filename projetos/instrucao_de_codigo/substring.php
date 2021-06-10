<?php

$str = "Está é minha string ";

$novastring = substr($str,8, -8); //esclui do final ate a palavra desejada
$novastring2 = substr($str, 8, 6);

echo $novastring . "<br>";
echo $novastring2;
