<?php
$x = 10;
$y =& $x;



echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;
echo "Após mudar a variavel referenciada";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;
echo "Após mudar a variavel referencia";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

