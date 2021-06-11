<?php

$pessoa = [
    'Yago' => 24,
    'Anderson' => 30,
    'Santana' => 27,
    'Pinheiro' => 25
];

?>

<table border="2">
    <tr>
        <th>Nome</th>
        <th>idade</th>
    </tr>
    <?php foreach ($pessoa as $key => $value) : ?>
        <tr>
            <td><?= $key; ?></td>
            <td><?= $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>