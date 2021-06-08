<?php 

$lista = ["Pão", "Trigo", "Ovo", "Carne", "Miojo"];

function concatlista($array){
    $str = "Você comprou estes itens : ";

    for ($i=0; $i < count($array) ; $i++) { 
        if ($i + 1 == count($array)) {
            $str .= "$array[$i]. ";
        }else {
            $str .= "$array[$i], ";
        }
    }
    return $str;
}
echo concatlista($lista);
