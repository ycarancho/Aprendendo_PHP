<?php

$rank = [
    'Yago' => 10,
    'Anderson' => 75,
    'Santana' => 30,
    'Pinheiro' => 50
];

arsort($rank);

?>




<h1> Ranking </h1>

<ol>
    <?php foreach ($rank as $key => $value) : ?>
        <li><?= $key ?> -> <?= $value ?> pontos</li>

    <?php endforeach; ?>
</ol>