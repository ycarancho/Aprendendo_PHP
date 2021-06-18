<?php

$usuario = [
    'nome' => 'Yago',
    'idade' => 24,
    'profissao' => 'programador'
];

if ($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div>
            <input type="text" nome="nome" placeholder="Digite seu nome" value="<?= $nome; ?>">
        </div>
        <div>
            <input type="text" nome="idade" placeholder="Digite sua idade" value="<?= $idade; ?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="Digite sua profissao" value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" name="Enviar">
        </div>
    </form>
</body>

</html>