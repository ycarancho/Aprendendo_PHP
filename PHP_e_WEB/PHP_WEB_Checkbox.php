<?php
if (isset($_POST['ingredientes'])) {
    $ingredientes = $_POST['ingredientes'];
    print_r($ingredientes);
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
    <form action="PHP_WEB_Checkbox.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Feijão"> Feijão
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Arroz"> Arroz
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Carne"> Carne
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Maçã"> Maçã
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Banana"> Banana
        </div>
        <div>
            <input type="submit" name="Enviar">
        </div>
    </form>
</body>

</html>