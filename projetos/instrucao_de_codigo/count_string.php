<?php

 $str = "O rato roeu a roupa do rei de roma";
 $cont = 0;
 for ($i=0; $i < strlen($str) ; $i++) { 
     
    if ($str[$i] === "a") {
      $cont++;
    }
 }

 echo "A quantidade de letras A é de : $cont";