<?php

 # Casso seja necessário retornar vários valores de uma função, podemos formar um array para retorno;
 # Dai, podemos acessar os índices de forma isolada com a nova variável que contém o retorno;
 

 function alteraDados($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return[$nome, $idade];
 }

 $dados = alteraDados("Darlison Silva", 24);

 print_r($dados);

 echo "<br>";

 echo "Olá, $dados[0], você tem $dados[1]";