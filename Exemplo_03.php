<?php

//Tipo de variáveis Simples
$nome = 'Genilson';
$nomeCompleoto = "Genilson Francisco dos Reis";
$ano = 1992;
$salario = 1500.00;
$status = true;

/////////////////////////

//Tipo de váriáveis compostas
$profissao = array ("Programador", "Desenvolvedor", "Suporte");

echo $profissao [2];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("Exemplo_03.php", "r");
//var_dump($arquivo);

$nulo = null;

?>