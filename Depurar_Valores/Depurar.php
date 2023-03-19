<?php

// usamos duasfunções para verificar dados formatados;
// print_r e var_dump;
// as duas apresentam os dados de forma semelhante, porém, var_dump exibe de uma "human readable", que seria como "para humanos lerem"

$arr = [
    "Teste",
    123,
    123.456,
    true,
    [3, 2, 1]
];

print_r($arr);

echo "<br>";

var_dump($arr);