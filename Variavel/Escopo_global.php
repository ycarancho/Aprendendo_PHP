<?php
$teste = "afg"; // Variavel global
echo "<br>";
if (true) { // Modificando a variavel global no IF
    $teste = "gfa";
    echo " Dentro do IF $teste";
}
// function testando (){
//     echo $teste; /* Não imprime pois a variavel
//     não está definida dentro da fução*/
// }
function agoravai (){
    $teste = "agora imprime"; // variavel definida.
    echo "Definido no escopo da função $teste";
}
echo "<br>";
function chamaglobal (){
    global $teste;
    echo "Dentro da função com chamada global $teste";
}
echo "Global $teste";
echo "<br>";
agoravai();
echo "<br>";
chamaglobal();