<?php

$nome = "genilson francisco dos reis";


//strtoupper - Deixa todas as palavras em maisculo.
$nome = strtoupper($nome);
 echo $nome;

 // strtolower - Deixa todas as palavras em minusculo.
 $nome = strtolower($nome);

 echo "<br>";
 echo $nome;

 // ucwords - Deixa cada letra de cada palavra em maiusculo.
echo "<br>";
echo ucwords($nome);

// ucfirst - Deixa só a primeira letra em maiúsculo
echo "<br>";
echo ucfirst($nome);

