<?php
if (isset($_FILES)) {
    $imagem = $_FILES;
    print_r($imagem);
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
    <form action="PHP_WEB_File.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="Imagem">
        </div>
        <input type="submit" name="Enviar">
    </form>
</body>

</html>