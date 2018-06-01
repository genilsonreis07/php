<?php

$nome = "Genilson";
$sobrenome = "Francisco dos Reis";


//Concatenação usando o .
$nomeCompleto = $nome ." ". $sobrenome;

echo $nomeCompleto;

exit;

//unset Limpa a variável.
unset($nomeCompleto);

//isset - Significa se a varável existir
if(isset($nomeCompleto) ){
	echo $nomeCompleto;
}
?>