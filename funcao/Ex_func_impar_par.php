<?php

function par_impar($num)
{
    if (is_int($num)) {
        if ($num % 2 == 0) {
            return 0;
        } else {
            return 1;
        }
    } else {
        return 2;
    }
}

$num = "";
$ret = par_impar($num);

switch ($ret) {
    case '0':
        echo "O numero $num: é par";
        break;
    case '1':
        echo "O numero $num: é impar";
        break;
    case '2':
        echo "Informe uma condição valida";
        break;
    default:
        echo "Erro";
        break;
}
