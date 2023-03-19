<?php
 
 # podemos passar parâmetros já possuem um valor pré-determinado;
 # então, caso você não passe esse parâmetro, o valor default entra e, cena;
 # a função será executada normalmente com o valor definido;
 

 function teste ($a = "teste"){
    echo "O valor de A: $a <br>";
 }

 teste();
 teste("Darlison");

 function testando($a = "x", $b = ){
    echo "O valor  de a é: $a e de b é: $b  <br>";
 }

 testando("1");
 testando("Darlison", " Silva");
?>