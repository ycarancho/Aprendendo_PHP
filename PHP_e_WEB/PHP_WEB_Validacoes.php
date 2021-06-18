<?php
$validacao = [];

if ($_POST > 0) {
    if ($_POST['nome'] === "") {
        $validacao[] = "Informe um Nome";
    }
    if ($_POST['email'] === "") {
        $validacao[] = "Informe um E-mail";
    }
    if ($_POST['senha'] != $_POST['confirmacao']) {
        $validacao[] = "As senhas não são iguais ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (count($validacao)) : ?>
        <ul>
            <?php foreach ($validacao as $key => $value) : ?>
                <li><?= $value; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="PHP_WEB_Validacoes.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="E-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme a senha">
        </div>
        <div><input type="submit" value="Enviar"></div>
    </form>

</body>

</html>