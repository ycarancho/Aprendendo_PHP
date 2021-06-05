<?php

$velocidade = 40;
$vel_ok = 40;


if ($velocidade < $vel_ok) {

    echo "Vecolidade baixa, $velocidade Km " . "<br>";

} elseif ($velocidade == $vel_ok) {

    echo "Cuidado !!! velocidade no limite. $velocidade Km " . "<br>";

} elseif ($velocidade > $vel_ok) {
    
    echo "Uma multa será aplicada em seu veiculo por ultrapassar a velocidade permitida de $vel_ok KM" . "<br>";
    echo "Velocidade atual $velocidade Km" . "<br>";
}
