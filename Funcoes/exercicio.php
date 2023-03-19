<?php

 // EXERCICIO 01_ funcao.php

 $arr = ["teste", "balão", "olá", "Janela", "Planta"];

 $teste = implode(",", $arr);

 echo $teste;
 // essa funçaõ, junta um array em uma String única!

 echo "<br>";

 echo "<br>";

 echo "EXERCÍCIO 02 <br>";


 function multiplicacao(){
    $x = 5;
    $y = 4.12;
    $z = 8;

    $resultado = $x * $y * $z;

    echo $resultado . "<br>";
 }

 // Invocando a função cahamando ela pelo nome;

 multiplicacao();

 echo "<br>";

 echo "<br>";

 echo "EXERCÍCIO 03 <br>";
 function fullName(){
    $name = "Darlison";
    $sobreNome = "Silva";

    echo $name . " " . $sobreNome;
 }

 fullName();
