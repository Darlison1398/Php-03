<?php
  
  $a = 10;
  $b = 15;

  function testeEscopo(){
    $a = 5;

    global $b;

    static $c = 0;

    $a++;
    $b++;
    $c++;

    echo "Escopo local 'de A: $a <br>";
    
    echo "Escopo local 'de A: $b <br>";
  }

  echo  "Escopo global de A: $a <br>";

  testeEscopo();
?>