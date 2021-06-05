<?php

$arr = ['Yago', 'Anderson', 'Santana', 'Pinheiro'];

foreach ($arr as $nome => $value) {
    /* Estrutura do Foreache  Array as Indice => Valor do indice*/

    if ($value == 'Anderson') {
        echo "Ola " . $value;
    }
}
