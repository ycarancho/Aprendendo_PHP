<?php

include_once  "backend.php";
?>

<h1> Seja Bem Vindo ao nosso Site </h1>
<p><?= $nome; ?> Veja nossa ofertas... </p>

<h2>Produtos</h2>
<ul>
    <?php foreach ($produtos as $produto) : ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>