<?php

print_r($_SERVER);
echo "<br>";
echo $_SERVER['MYSQL_HOME'];

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    echo "Está acessando o localhost <br>";
} else {

    echo "O nome do servidor não é localhost";
}
