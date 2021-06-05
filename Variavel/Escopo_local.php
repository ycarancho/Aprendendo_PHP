<?php
$x = 0;
echo $x;
function teste($x){ // Escopo local.
    $x = 10;
    return $x;
}
echo "<br>";
echo teste($x);
