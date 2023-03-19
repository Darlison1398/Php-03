<?php

// É semelhante as short tags, podendo exibir conteúdo sem echo;
// Ótima estratégia para resumir as chamadas PHP apenas para exibição de valores;

  $nome =  "Darlison Silva";
?>

<form action="">
    <div>
        <input type="text" value = "<?= $nome ?>">
    </div>

    <div>
        <input type="sbmit" value= "Enviar">
    </div>
</form>