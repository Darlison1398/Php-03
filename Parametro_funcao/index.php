<?php

// parâmetros são como variáveis, que são utilizados dentro da função para moldar a sua expressão;
// não há número máximo de parâmetros;
// eles podem ser passados para  as funções.

function velocidadeMaxima($vel){
    echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    if (is_int($vel)){
        echo "Velocidade do carro em inteiros <br>";
    }else{
        echo "Velocidade do carro em float <br>";
    }
}

velocidadeMaxima(100);
velocidadeMaxima(300);

echo "<br>";

echo "Continuando o teste<br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

echo "<br>";
echo "<br>";

function descreverAnimal($nome, $raca){
    echo "O $nome é da raça $raca";
}

descreverAnimal("Dog", "Salsisha");

echo "<br>";

descreverAnimal("Spike", "Viralata");