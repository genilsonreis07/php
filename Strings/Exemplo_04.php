<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

//strpos — Encontra a posição da primeira ocorrência de uma string
$q = strpos($frase, $palavra);

//substr — Retorna uma parte de uma string
$texto = substr($frase, 0, $q);

var_dump($texto);

//strlen — Retorna o tamanho de uma string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";
var_dump($texto2);

?>