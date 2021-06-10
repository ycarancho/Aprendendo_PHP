<?php

$frase1 = "Substituindo a frase";

$frasearray = explode(" ", $frase1);

    for ($i=0; $i < count($frasearray); $i++) { 
        if ($frasearray[$i] == "frase") {
           $frasearray [$i] = "teste";
        
        foreach ($frasearray as $key => $value) {
         echo $value . " ";
            
        }
    }
    }
    
