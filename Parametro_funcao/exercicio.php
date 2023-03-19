<?php

 function apresentacao($nome, $idade){
    echo "Olá, eu me chamo $nome, e tenho $idade anos <br>";
 }

 apresentacao("Darlison Silva", 24);

 echo "<br>";
 echo "<br>";

 function par($num){
    if ($num % 2 == 0){
        echo "Par <br>";
    }else{
        echo "Impar";
    }
 }

 par(15);
