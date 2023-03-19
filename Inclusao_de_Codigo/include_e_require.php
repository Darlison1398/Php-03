<?php

// include_once require_once
# ambos funcionam da mesma maniera que o include e require;
# eles impedem que o mesmo arquivo seja adicionado mais de uma vez na página;
# é o método mais indicado quando estamos montando templates com PHP;

// Arquivos que não existem
//include_once "teste.php";


include_once "teste_02.php";

echo "<br>";
echo "<br>";

echo "Testando o require <br>";
echo "<br>";

require_once "testando_require.php";
?>

<h3>Testando código. Aqui é o código principal que chama os outros para serem executados.</h3>