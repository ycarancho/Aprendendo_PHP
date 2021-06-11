<?php

$pessoa = [
    'nome' => 'Yago',
    'idade' => 24,

];

extract($pessoa);

echo "Meu nome é $nome e tenho $idade anos. ";